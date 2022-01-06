<?php


class Model
{
    protected $table;

    protected $attributes = [];
    protected $db;

    public function __construct()
    {
       $this->db=DB::getInstance();
    }

    public function setAttributes($data){

        $this->attributes = array_merge($this->attributes, ['id','created_at','updated_at','deleted_at']);

        foreach($data as $field => $value){
            if(in_array($field,$this->attributes)){
                $this->$field = $value;
            }
        }

        return $this;
    }

    public function create($data){
//        dump($this->db);
//        dump($data);

//        $keys= array_keys($data);
//        $keys='('.implode(',',$keys).')';//(username,pass,email)
//
//        foreach ($data as $key=>$value){
//            $data[':'.$key] = $value;
//            unset($data[$key]);
//        }
        //$data=[
        //':username' ->'plt',
        //':pass' ->'plt',
        //];

//        $newKey= array_keys($data);
//        $newKey='('.implode(',',$newKey).')';//(:username,:pass,:email)
//
//        $query='INSERT INTO '.$this->table.$keys.' VALUES'.$newKey;
//        $req=$this->db->prepare($query);
//        $req->execute($data);
// xóa các trường k thuộc trong các thuộc tính
        foreach($data as $key => $value){
            if(!in_array($key,$this->attributes)){
                unset($data[$key]);
            }
        }

        $keys = array_keys($data);
        $keys = '(' . implode(', ',$keys) . ')';

        foreach($data as $key => $value){
            $data[':'.$key] = $value;
            unset($data[$key]);
        }

        $newKeys = array_keys($data);
        $newKeys = '(' . implode(', ',$newKeys) . ')';


        $query = 'INSERT INTO '.$this->table.' '.$keys.' VALUES '.$newKeys;
        $req = $this->db->prepare($query);
        $req->execute($data);
    //dump($req->execute($data));
// dump($query);
         $req->fetch();
//          echo 'đăng ký thành công';



    }
    public function update($data){
        $attributesUpdate= array_keys($data);
        $attributesUpdate=implode("=?, ",$attributesUpdate);
        $attributesUpdate=$attributesUpdate.'=? ';

        $valuesUpdate=array_values($data);


        $query= "UPDATE {$this->table} SET {$attributesUpdate} WHERE id={$this->id}";
        $this->db->prepare($query)->execute($valuesUpdate);
        return $this->find($this->id);
    }
    public function find($id){
        $req = $this->db->prepare('SELECT * FROM '.$this->table.' WHERE id = :id AND deleted_at<>NULL' );
        $req->execute(array('id' => $id));
        $modelAttributes = $req->fetch();

        if (!$modelAttributes){
            return NULL;
        }

        //dump($item);
        return $this->setAttributes($modelAttributes);
    }
    public function deleteForever(){
        $query="DELETE FROM {$this->table} WHERE id=?";
        return $this->db->prepare($query)->execute([$this->id]);

    }

    public function delete(){
        return $this->update([
           'deleted_at'=>date("Y-m-d H:i:s")
        ]);
    }
    public function getList($statements=[]){
        $query= "SELECT * FROM {$this->table} WHERE ".implode(' AND ',$statements)." AND ISNULL(deleted_at)";
        $listModels=$this->db->query($query)->fetchAll();
    //    dd($query);
        return array_map(function ($model){
            $user= new User();
            $user->setAttributes($model);
            return $user;
        },$listModels);
    }
}
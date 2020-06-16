<?php
function getChild($id){
   $child =  DB::table('categories')->where('parent_id',$id)->where('publication_status',1)->orderBy('name','asc')->get();
   return $child;
}
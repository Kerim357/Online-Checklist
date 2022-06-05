<?php
// CRUD operations for todos entity

/**
 * @OA\Get(path="/todos", tags={"todo"}, security={{"ApiKeyAuth": {}}},
 *         summary="Return all user todos from the API. ",
 *         @OA\Response( response=200, description="List of todos.")
 * )
 */
Flight::route('GET /', function(){
  Flight::json(Flight::BaseDao()->get_all());
  console.log("radi");
});

/**
* List invidiual todo
*/
/*Flight::route('GET //@id', function($id){
  Flight::json(Flight::todoService()->get_by_id($id));
});

/**
* add todo
*/

?>

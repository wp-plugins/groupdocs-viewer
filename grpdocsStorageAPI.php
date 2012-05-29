<?php
/**
 *  Copyright 2011 Wordnik, Inc.
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
 
/**
 *
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 */

class StorageAPI {

	function __construct($apiClient) {
	  $this->apiClient = $apiClient;
	}


	/**
	 * Get storage info
	 *
	 * 
	 * 
   * @param userId  User GUID
   *  
	 * @return StorageInfoResponse {@link StorageInfoResponse} 
	 * @throws APIException 
	 */

	 public function GetStorageInfo($userId) {

		//parse inputs
		$resourcePath = "/storage/{userId}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$method = "GET";
        $queryParams = array();
        $headerParams = array();
    
		
		if($userId != null) {
			$resourcePath = str_replace("{userId}", $userId, $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'StorageInfoResponse');
		return $responseObject;
				
				
	 }


	/**
	 * List entities
	 *
	 * 
	 * 
   * @param storageStorageInputFoldersInput  
   *  
	 * @return ListEntitiesResponse {@link ListEntitiesResponse} 
	 * @throws APIException 
	 */

	 public function ListEntities($storageStorageInputFoldersInput) {

		//parse inputs
		$resourcePath = "/storage/{userId}/folders/{*path}?page={pageIndex}&count={pageSize}&order_by={orderBy}&order_asc={orderAsc}&filter={filter}&file_types={fileTypes}&extended={extended}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$method = "GET";
        $queryParams = array();
        $headerParams = array();
    
	
		
		if($storageStorageInputFoldersInput != null && $storageStorageInputFoldersInput->userId != null) {
		 	$resourcePath = str_replace("{userId}", $storageStorageInputFoldersInput->userId, $resourcePath);	
		}
		if($storageStorageInputFoldersInput != null && $storageStorageInputFoldersInput->path != null) {
		 	$resourcePath = str_replace("{path}", $storageStorageInputFoldersInput->path, $resourcePath);	
		}
		if($storageStorageInputFoldersInput != null && $storageStorageInputFoldersInput->pageIndex != null) {
		 	$resourcePath = str_replace("{pageIndex}", $storageStorageInputFoldersInput->pageIndex, $resourcePath);	
		}
		if($storageStorageInputFoldersInput != null && $storageStorageInputFoldersInput->pageSize != null) {
		 	$resourcePath = str_replace("{pageSize}", $storageStorageInputFoldersInput->pageSize, $resourcePath);	
		}
		if($storageStorageInputFoldersInput != null && $storageStorageInputFoldersInput->orderBy != null) {
		 	$resourcePath = str_replace("{orderBy}", $storageStorageInputFoldersInput->orderBy, $resourcePath);	
		}
		if($storageStorageInputFoldersInput != null && $storageStorageInputFoldersInput->orderAsc != null) {
		 	$resourcePath = str_replace("{orderAsc}", $storageStorageInputFoldersInput->orderAsc, $resourcePath);	
		}
		if($storageStorageInputFoldersInput != null && $storageStorageInputFoldersInput->filter != null) {
		 	$resourcePath = str_replace("{filter}", $storageStorageInputFoldersInput->filter, $resourcePath);	
		}
		if($storageStorageInputFoldersInput != null && $storageStorageInputFoldersInput->fileTypes != null) {
		 	$resourcePath = str_replace("{fileTypes}", $storageStorageInputFoldersInput->fileTypes, $resourcePath);	
		}
		if($storageStorageInputFoldersInput != null && $storageStorageInputFoldersInput->extended != null) {
		 	$resourcePath = str_replace("{extended}", $storageStorageInputFoldersInput->extended, $resourcePath);	
		}

	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'ListEntitiesResponse');
		return $responseObject;
				
				
	 }


	/**
	 * Get file
	 *
	 * 
	 * 
   * @param userId  User GUID
   *  @param fileId  File ID
   *  
	 * @return string {@link string} 
	 * @throws APIException 
	 */

	 public function GetFile($userId, $fileId) {

		//parse inputs
		$resourcePath = "/storage/{userId}/files/{fileId}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$method = "GET";
        $queryParams = array();
        $headerParams = array();
    
		
		if($userId != null) {
			$resourcePath = str_replace("{userId}", $userId, $resourcePath);
		}
		if($fileId != null) {
			$resourcePath = str_replace("{fileId}", $fileId, $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'string');
		return $responseObject;
				
				
	 }


	/**
	 * Get shared file
	 *
	 * 
	 * 
   * @param userEmail  User Email
   *  @param filePath  File path
   *  
	 * @return string {@link string} 
	 * @throws APIException 
	 */

	 public function GetSharedFile($userEmail, $filePath) {

		//parse inputs
		$resourcePath = "/storage/shared/{userEmail}/{*filePath}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$method = "GET";
        $queryParams = array();
        $headerParams = array();
    
		
		if($userEmail != null) {
			$resourcePath = str_replace("{userEmail}", $userEmail, $resourcePath);
		}
		if($filePath != null) {
			$resourcePath = str_replace("{filePath}", $filePath, $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'string');
		return $responseObject;
				
				
	 }


	/**
	 * Upload
	 *
	 * 
	 * 
   * @param userId  User GUID
   *  @param path  Path
   *  @param description  Description
   *  @param postData  Stream
   *  
	 * @return UploadResponse {@link UploadResponse} 
	 * @throws APIException 
	 */

	 public function Upload($userId, $path, $description, $postData) {

		//parse inputs
		$resourcePath = "/storage/{userId}/folders/{path}?description={description}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$method = "POST";
        $queryParams = array();
        $headerParams = array();
    
		
		if($userId != null) {
			$resourcePath = str_replace("{userId}", $userId, $resourcePath);
		}
		if($path != null) {
			$resourcePath = str_replace("{path}", $path, $resourcePath);
		}
		if($description != null) {
			$resourcePath = str_replace("{description}", $description, $resourcePath);
		}


		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, $postData, $headerParams);
    if(! $response){
        return null;
    }
return json_decode($response);

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'UploadResponse');
		return $responseObject;
				
				
	 }


	/**
	 * Upload Web
	 *
	 * 
	 * 
   * @param userId  User GUID
   *  @param url  Url
   *  
	 * @return UploadResponse {@link UploadResponse} 
	 * @throws APIException 
	 */

	 public function UploadWeb($userId, $url) {

		//parse inputs
		$resourcePath = "/storage/{userId}/urls?url={url}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$method = "POST";
        $queryParams = array();
        $headerParams = array();
    
		
		if($userId != null) {
			$resourcePath = str_replace("{userId}", $userId, $resourcePath);
		}
		if($url != null) {
			$resourcePath = str_replace("{url}", $url, $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'UploadResponse');
		return $responseObject;
				
				
	 }


	/**
	 * Delete
	 *
	 * 
	 * 
   * @param userId  User GUID
   *  @param fileId  File ID
   *  
	 * @return DeleteResponse {@link DeleteResponse} 
	 * @throws APIException 
	 */

	 public function Delete($userId, $fileId) {

		//parse inputs
		$resourcePath = "/storage/{userId}/files/{fileId}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$method = "DELETE";
        $queryParams = array();
        $headerParams = array();
    
		
		if($userId != null) {
			$resourcePath = str_replace("{userId}", $userId, $resourcePath);
		}
		if($fileId != null) {
			$resourcePath = str_replace("{fileId}", $fileId, $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'DeleteResponse');
		return $responseObject;
				
				
	 }


	/**
	 * Delete from folder
	 *
	 * 
	 * 
   * @param userId  User GUID
   *  @param path  Path
   *  
	 * @return DeleteResponse {@link DeleteResponse} 
	 * @throws APIException 
	 */

	 public function DeleteFromFolder($userId, $path) {

		//parse inputs
		$resourcePath = "/storage/{userId}/folders/{*path}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$method = "DELETE";
        $queryParams = array();
        $headerParams = array();
    
		
		if($userId != null) {
			$resourcePath = str_replace("{userId}", $userId, $resourcePath);
		}
		if($path != null) {
			$resourcePath = str_replace("{path}", $path, $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'DeleteResponse');
		return $responseObject;
				
				
	 }


	/**
	 * Move file
	 *
	 * 
	 * 
   * @param userId  User GUID
   *  @param path  Path
   *  @param mode  Mode
   *  
	 * @return FileMoveResponse {@link FileMoveResponse} 
	 * @throws APIException 
	 */

	 public function MoveFile($userId, $path, $mode) {

		//parse inputs
		$resourcePath = "/storage/{userId}/files/{*path}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$method = "PUT";
        $queryParams = array();
        $headerParams = array();
    
		
		if($userId != null) {
			$resourcePath = str_replace("{userId}", $userId, $resourcePath);
		}
		if($path != null) {
			$resourcePath = str_replace("{path}", $path, $resourcePath);
		}
		if($mode != null) {
			$resourcePath = str_replace("{mode}", $mode, $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'FileMoveResponse');
		return $responseObject;
				
				
	 }


	/**
	 * Move folder
	 *
	 * 
	 * 
   * @param userId  User GUID
   *  @param path  Path
   *  @param mode  Mode
   *  
	 * @return FolderMoveResponse {@link FolderMoveResponse} 
	 * @throws APIException 
	 */

	 public function MoveFolder($userId, $path, $mode) {

		//parse inputs
		$resourcePath = "/storage/{userId}/folders/{*path}?override_mode={mode}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$method = "PUT";
        $queryParams = array();
        $headerParams = array();
    
		
		if($userId != null) {
			$resourcePath = str_replace("{userId}", $userId, $resourcePath);
		}
		if($path != null) {
			$resourcePath = str_replace("{path}", $path, $resourcePath);
		}
		if($mode != null) {
			$resourcePath = str_replace("{mode}", $mode, $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'FolderMoveResponse');
		return $responseObject;
				
				
	 }


	/**
	 * Create
	 *
	 * 
	 * 
   * @param userId  User GUID
   *  @param path  Path
   *  
	 * @return CreateFolderResponse {@link CreateFolderResponse} 
	 * @throws APIException 
	 */

	 public function Create($userId, $path) {

		//parse inputs
		$resourcePath = "/storage/{userId}/paths/{*path}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$method = "POST";
        $queryParams = array();
        $headerParams = array();
    
		
		if($userId != null) {
			$resourcePath = str_replace("{userId}", $userId, $resourcePath);
		}
		if($path != null) {
			$resourcePath = str_replace("{path}", $path, $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'CreateFolderResponse');
		return $responseObject;
				
				
	 }


	/**
	 * Compress
	 *
	 * 
	 * 
   * @param userId  User GUID
   *  @param archiveType  Archive type
   *  
	 * @return CompressResponse {@link CompressResponse} 
	 * @throws APIException 
	 */

	 public function Compress($userId, $archiveType) {

		//parse inputs
		$resourcePath = "/storage/{userId}/files/{fileId}/archive/{archiveType}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$method = "POST";
        $queryParams = array();
        $headerParams = array();
    
		
		if($userId != null) {
			$resourcePath = str_replace("{userId}", $userId, $resourcePath);
		}
		if($archiveType != null) {
			$resourcePath = str_replace("{archiveType}", $archiveType, $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'CompressResponse');
		return $responseObject;
				
				
	 }


	/**
	 * Create Package
	 *
	 * 
	 * 
   * @param userId  User GUID
   *  @param packageName  Package Name
   *  @param paths  Paths
   *  
	 * @return CreatePackageResponse {@link CreatePackageResponse} 
	 * @throws APIException 
	 */

	 public function CreatePackage($userId, $packageName, $paths) {

		//parse inputs
		$resourcePath = "/storage/{userId}/packages/{packageName}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$method = "POST";
        $queryParams = array();
        $headerParams = array();
    
		
		if($userId != null) {
			$resourcePath = str_replace("{userId}", $userId, $resourcePath);
		}
		if($packageName != null) {
			$resourcePath = str_replace("{packageName}", $packageName, $resourcePath);
		}
		if($paths != null) {
			$resourcePath = str_replace("{paths}", $paths, $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'CreatePackageResponse');
		return $responseObject;
				
				
	 }


	/**
	 * Move to trash
	 *
	 * 
	 * 
   * @param userId  User GUID
   *  @param path  Path
   *  
	 * @return FolderMoveResponse {@link FolderMoveResponse} 
	 * @throws APIException 
	 */

	 public function MoveToTrash($userId, $path) {

		//parse inputs
		$resourcePath = "/storage/{userId}/trash/{*path}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$method = "PUT";
        $queryParams = array();
        $headerParams = array();
    
		
		if($userId != null) {
			$resourcePath = str_replace("{userId}", $userId, $resourcePath);
		}
		if($path != null) {
			$resourcePath = str_replace("{path}", $path, $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'FolderMoveResponse');
		return $responseObject;
				
				
	 }


	/**
	 * Restore from trash
	 *
	 * 
	 * 
   * @param userId  User GUID
   *  @param path  Path
   *  
	 * @return DeleteResponse {@link DeleteResponse} 
	 * @throws APIException 
	 */

	 public function RestoreFromTrash($userId, $path) {

		//parse inputs
		$resourcePath = "/storage/{userId}/trash/{*path}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$method = "DELETE";
        $queryParams = array();
        $headerParams = array();
    
		
		if($userId != null) {
			$resourcePath = str_replace("{userId}", $userId, $resourcePath);
		}
		if($path != null) {
			$resourcePath = str_replace("{path}", $path, $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'DeleteResponse');
		return $responseObject;
				
				
	 }



}
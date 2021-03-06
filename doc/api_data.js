define({ "api": [
  {
    "type": "delete",
    "url": "/v1/users/:id",
    "title": "updateUser",
    "version": "0.1.0",
    "name": "deleteUser",
    "group": "Users",
    "filename": "app/Http/Controllers/UsersController.php",
    "groupTitle": "Users",
    "sampleRequest": [
      {
        "url": "localhost:8000/api/v1/users/:id"
      }
    ]
  },
  {
    "type": "get",
    "url": "/v1/users/:id",
    "title": "showUser",
    "version": "0.1.0",
    "name": "showUser",
    "group": "Users",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "id",
            "optional": false,
            "field": "id",
            "description": ""
          }
        ]
      }
    },
    "filename": "app/Http/Controllers/UsersController.php",
    "groupTitle": "Users",
    "sampleRequest": [
      {
        "url": "localhost:8000/api/v1/users/:id"
      }
    ]
  },
  {
    "type": "post",
    "url": "/v1/users",
    "title": "storeUser",
    "version": "0.1.0",
    "name": "storeUser",
    "group": "Users",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "string",
            "optional": false,
            "field": "email",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "string",
            "optional": true,
            "field": "password",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "string",
            "optional": true,
            "field": "first_name",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "string",
            "optional": true,
            "field": "second_name",
            "description": ""
          }
        ]
      }
    },
    "filename": "app/Http/Controllers/UsersController.php",
    "groupTitle": "Users",
    "sampleRequest": [
      {
        "url": "localhost:8000/api/v1/users"
      }
    ]
  },
  {
    "type": "put",
    "url": "/v1/users/:id",
    "title": "updateUser",
    "version": "0.1.0",
    "name": "updateUser",
    "group": "Users",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "string",
            "optional": true,
            "field": "email",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "string",
            "optional": true,
            "field": "password",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "string",
            "optional": true,
            "field": "first_name",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "string",
            "optional": true,
            "field": "second_name",
            "description": ""
          }
        ]
      }
    },
    "filename": "app/Http/Controllers/UsersController.php",
    "groupTitle": "Users",
    "sampleRequest": [
      {
        "url": "localhost:8000/api/v1/users/:id"
      }
    ]
  }
] });

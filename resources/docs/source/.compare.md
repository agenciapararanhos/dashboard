---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost:8000/docs/collection.json)

<!-- END_INFO -->

#general


<!-- START_e40bc60a458a9740730202aaec04f818 -->
## Returns the initial HTML view for the admin interface.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/admin" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/admin"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin`


<!-- END_e40bc60a458a9740730202aaec04f818 -->

<!-- START_a23295baaf139a626c278f38f5901e44 -->
## Returns the JS file content

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/admin/1/jqadm/file/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/admin/1/jqadm/file/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/{site}/jqadm/file/{type}`


<!-- END_a23295baaf139a626c278f38f5901e44 -->

<!-- START_d3cde4cc3bc1f5e6ad1e8fc8acc50c43 -->
## Returns the HTML code for a copy of a resource object

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/admin/1/jqadm/copy/1/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/admin/1/jqadm/copy/1/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": ""
}
```

### HTTP Request
`GET admin/{site}/jqadm/copy/{resource}/{id}`

`POST admin/{site}/jqadm/copy/{resource}/{id}`


<!-- END_d3cde4cc3bc1f5e6ad1e8fc8acc50c43 -->

<!-- START_66b428768ebc9f2c7b8646cab8a1da1a -->
## Returns the HTML code for a new resource object

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/admin/1/jqadm/create/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/admin/1/jqadm/create/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": ""
}
```

### HTTP Request
`GET admin/{site}/jqadm/create/{resource}`

`POST admin/{site}/jqadm/create/{resource}`


<!-- END_66b428768ebc9f2c7b8646cab8a1da1a -->

<!-- START_d6d1a8c9afc7b36204020b3b735486fb -->
## Deletes the resource object or a list of resource objects

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/admin/1/jqadm/delete/1/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/admin/1/jqadm/delete/1/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": ""
}
```

### HTTP Request
`GET admin/{site}/jqadm/delete/{resource}/{id?}`

`POST admin/{site}/jqadm/delete/{resource}/{id?}`


<!-- END_d6d1a8c9afc7b36204020b3b735486fb -->

<!-- START_a424c3d7a78cfb6c1d11930f32d72eb5 -->
## Exports the data for a resource object

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/admin/1/jqadm/export/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/admin/1/jqadm/export/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": ""
}
```

### HTTP Request
`GET admin/{site}/jqadm/export/{resource}`

`POST admin/{site}/jqadm/export/{resource}`


<!-- END_a424c3d7a78cfb6c1d11930f32d72eb5 -->

<!-- START_052752fb455006b60dc1524f1b4d2625 -->
## Returns the HTML code for the requested resource object

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/admin/1/jqadm/get/1/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/admin/1/jqadm/get/1/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": ""
}
```

### HTTP Request
`GET admin/{site}/jqadm/get/{resource}/{id}`


<!-- END_052752fb455006b60dc1524f1b4d2625 -->

<!-- START_41e1bab4dffbc8966475f9f3109c1043 -->
## Saves a new resource object

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/admin/1/jqadm/save/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/admin/1/jqadm/save/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/{site}/jqadm/save/{resource}`


<!-- END_41e1bab4dffbc8966475f9f3109c1043 -->

<!-- START_374636fec7a4934278b0d22f3944d655 -->
## Returns the HTML code for a list of resource objects

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/admin/1/jqadm/search/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/admin/1/jqadm/search/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": ""
}
```

### HTTP Request
`GET admin/{site}/jqadm/search/{resource}`

`POST admin/{site}/jqadm/search/{resource}`


<!-- END_374636fec7a4934278b0d22f3944d655 -->

<!-- START_06c253c97efc016c62704c94774a1ebc -->
## Deletes the resource object or a list of resource objects

> Example request:

```bash
curl -X DELETE \
    "http://localhost:8000/admin/1/jsonadm/1/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/admin/1/jsonadm/1/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/{site}/jsonadm/{resource}/{id?}`


<!-- END_06c253c97efc016c62704c94774a1ebc -->

<!-- START_ff5adc9765dfcf5258b844d6ed4a5f27 -->
## Returns the requested resource object or list of resource objects

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/admin/1/jsonadm/1/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/admin/1/jsonadm/1/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": ""
}
```

### HTTP Request
`GET admin/{site}/jsonadm/{resource}/{id?}`


<!-- END_ff5adc9765dfcf5258b844d6ed4a5f27 -->

<!-- START_19558322981cca5e8eeea0f64ac9d12a -->
## Updates a resource object or a list of resource objects

> Example request:

```bash
curl -X PATCH \
    "http://localhost:8000/admin/1/jsonadm/1/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/admin/1/jsonadm/1/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PATCH admin/{site}/jsonadm/{resource}/{id?}`


<!-- END_19558322981cca5e8eeea0f64ac9d12a -->

<!-- START_0864543b92af2e5933f36d915eae893f -->
## Creates a new resource object or a list of resource objects

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/admin/1/jsonadm/1/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/admin/1/jsonadm/1/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/{site}/jsonadm/{resource}/{id?}`


<!-- END_0864543b92af2e5933f36d915eae893f -->

<!-- START_fa173f4fa36fcc7fb68f79318db52a11 -->
## Creates or updates a single resource object

> Example request:

```bash
curl -X PUT \
    "http://localhost:8000/admin/1/jsonadm/1/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/admin/1/jsonadm/1/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/{site}/jsonadm/{resource}/{id?}`


<!-- END_fa173f4fa36fcc7fb68f79318db52a11 -->

<!-- START_50865c8ecf9350dc16554c8ccf65ba5d -->
## Returns the available HTTP verbs and the resource URLs

> Example request:

```bash
curl -X OPTIONS \
    "http://localhost:8000/admin/1/jsonadm/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/admin/1/jsonadm/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "OPTIONS",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`OPTIONS admin/{site}/jsonadm/{resource?}`


<!-- END_50865c8ecf9350dc16554c8ccf65ba5d -->

<!-- START_73c380a1019f650dd82b80b38412ca3a -->
## Deletes the resource object or a list of resource objects

> Example request:

```bash
curl -X DELETE \
    "http://localhost:8000/jsonapi/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/jsonapi/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE jsonapi/{resource}`


<!-- END_73c380a1019f650dd82b80b38412ca3a -->

<!-- START_ee246aca7e1f084dc103fd40ee4ec9be -->
## Returns the requested resource object or list of resource objects

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/jsonapi/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/jsonapi/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "errors": {
        "title": "Use OPTIONS method for the resource list",
        "detail": "This is the Aimeos JSON REST API\n\nUse the HTTP OPTIONS method to retrieve a list available resources from http:\/\/localhost:8000\/jsonapi\nDocumentation about he Aimeos JSON REST API is available at https:\/\/agenciaparanhos.com.br\/docs\/Developers\/Client\/JSONAPI"
    }
}
```

### HTTP Request
`GET jsonapi/{resource}`


<!-- END_ee246aca7e1f084dc103fd40ee4ec9be -->

<!-- START_9c2bc55cb9bde969abd7e6c3a5a33fc8 -->
## Updates a resource object or a list of resource objects

> Example request:

```bash
curl -X PATCH \
    "http://localhost:8000/jsonapi/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/jsonapi/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PATCH jsonapi/{resource}`


<!-- END_9c2bc55cb9bde969abd7e6c3a5a33fc8 -->

<!-- START_20d4282447b887d6c57510909ca357b1 -->
## Creates a new resource object or a list of resource objects

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/jsonapi/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/jsonapi/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST jsonapi/{resource}`


<!-- END_20d4282447b887d6c57510909ca357b1 -->

<!-- START_9f49bcfca3ee1687675bed65b0aaedb4 -->
## Creates or updates a single resource object

> Example request:

```bash
curl -X PUT \
    "http://localhost:8000/jsonapi/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/jsonapi/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT jsonapi/{resource}`


<!-- END_9f49bcfca3ee1687675bed65b0aaedb4 -->

<!-- START_412dac0d65315330305e67c45e5acaa2 -->
## Returns the available HTTP verbs and the resource URLs

> Example request:

```bash
curl -X OPTIONS \
    "http://localhost:8000/jsonapi/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/jsonapi/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "OPTIONS",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`OPTIONS jsonapi/{resource?}`


<!-- END_412dac0d65315330305e67c45e5acaa2 -->

<!-- START_107ff0483f5d4b47925a0719edd21b5b -->
## Returns the view for the order update page.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/update" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/update"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET update`

`POST update`


<!-- END_107ff0483f5d4b47925a0719edd21b5b -->

<!-- START_448e7067704946ca64e71faaf3fbe050 -->
## Returns the html for the &quot;My account&quot; page.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/profile/favorite////" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/profile/favorite////"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET profile/favorite/{fav_action?}/{fav_id?}/{d_name?}/{d_pos?}`

`POST profile/favorite/{fav_action?}/{fav_id?}/{d_name?}/{d_pos?}`


<!-- END_448e7067704946ca64e71faaf3fbe050 -->

<!-- START_5de41a0ec93f897be8902f0164a8168d -->
## Returns the html for the &quot;My account&quot; page.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/profile/watch////" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/profile/watch////"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET profile/watch/{wat_action?}/{wat_id?}/{d_name?}/{d_pos?}`

`POST profile/watch/{wat_action?}/{wat_id?}/{d_name?}/{d_pos?}`


<!-- END_5de41a0ec93f897be8902f0164a8168d -->

<!-- START_8e3600eb876c009b6c2d5c0a7360b202 -->
## Returns the html for the &quot;My account&quot; download page.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/profile/download/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/profile/download/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET profile/download/{dl_id}`

`POST profile/download/{dl_id}`


<!-- END_8e3600eb876c009b6c2d5c0a7360b202 -->

<!-- START_708371783cccf0b840fdee05009dc542 -->
## Returns the html for the &quot;My account&quot; page.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/profile" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/profile"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET profile`

`POST profile`


<!-- END_708371783cccf0b840fdee05009dc542 -->

<!-- START_7b6a31dd7301976369bfa59a94d70d62 -->
## Returns the view for the XHR response with the counts for the facetted search.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/shop/count" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/shop/count"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET shop/count`

`POST shop/count`


<!-- END_7b6a31dd7301976369bfa59a94d70d62 -->

<!-- START_7f41866e8b6a3d5678d3d6108b382510 -->
## Returns the view for the XHR response with the product information for the search suggestion.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/shop/suggest" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/shop/suggest"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[
    {
        "label": "AAAAAAAAAAAAAAAAAAA",
        "html": "\n\t\t\t<li class=\"aimeos catalog-suggest\">\n\t\t\t\t<a class=\"suggest-item\" href=\"\/shop\/SEI-LA\">\n\t\t\t\t\t<div class=\"item-image\" style=\"display: none\"><\/div>\n\t\t\t\t\t<div class=\"item-name\">AAAAAAAAAAAAAAAAAAA<\/div>\n\t\t\t\t\t<div class=\"item-price\"><\/div>\n\t\t\t\t<\/a>\n\t\t\t<\/li>\n\t\t"
    }
]
```

### HTTP Request
`GET shop/suggest`

`POST shop/suggest`


<!-- END_7f41866e8b6a3d5678d3d6108b382510 -->

<!-- START_f4e60c073b8b6f62012888032ca82dcd -->
## Returns the html body part for the catalog stock page.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/shop/stock" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/shop/stock"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET shop/stock`

`POST shop/stock`


<!-- END_f4e60c073b8b6f62012888032ca82dcd -->

<!-- START_ad789f58396b162c3959b5fc4e7da5d7 -->
## Returns the html for the standard basket page.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/shop/basket" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/shop/basket"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET shop/basket`

`POST shop/basket`


<!-- END_ad789f58396b162c3959b5fc4e7da5d7 -->

<!-- START_f3729d7375fe01a76bd00cd162ac4707 -->
## Returns the html for the standard checkout page.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/shop/checkout/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/shop/checkout/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET shop/checkout/{c_step?}`

`POST shop/checkout/{c_step?}`


<!-- END_f3729d7375fe01a76bd00cd162ac4707 -->

<!-- START_6dbc1955b113706146b2d6ddc527c115 -->
## Returns the html for the checkout confirmation page.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/shop/confirm/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/shop/confirm/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET shop/confirm/{code?}`

`POST shop/confirm/{code?}`


<!-- END_6dbc1955b113706146b2d6ddc527c115 -->

<!-- START_e16db22ca45f78892b196ec2b05a50b1 -->
## Returns the html for the catalog detail page.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/shop/pin/1/1/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/shop/pin/1/1/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET shop/pin/{pin_action}/{pin_id}/{d_name}`

`POST shop/pin/{pin_action}/{pin_id}/{d_name}`


<!-- END_e16db22ca45f78892b196ec2b05a50b1 -->

<!-- START_752fe89073b6c48d79b6d7dfd23680d0 -->
## Returns the html for the catalog tree page.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/shop/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/shop/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET shop/{f_name}~{f_catid}`

`POST shop/{f_name}~{f_catid}`


<!-- END_752fe89073b6c48d79b6d7dfd23680d0 -->

<!-- START_059b65dd84d26ce483b06d823b31170f -->
## Returns the html for the catalog detail page.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/shop/1//" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/shop/1//"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET shop/{d_name}/{d_pos?}/{d_prodid?}`

`POST shop/{d_name}/{d_pos?}/{d_prodid?}`


<!-- END_059b65dd84d26ce483b06d823b31170f -->

<!-- START_76cfe93f704b1c651a87472f6530152c -->
## Returns the html for the catalog list page.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/shop" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/shop"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET shop`

`POST shop`


<!-- END_76cfe93f704b1c651a87472f6530152c -->

<!-- START_5d6ce2ec72b9360a929e0425b42a2a8a -->
## Returns the html for the terms and conditions page.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/terms" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/terms"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET terms`


<!-- END_5d6ce2ec72b9360a929e0425b42a2a8a -->

<!-- START_b31353d8308de761c8cb9e4d41a07df3 -->
## Returns the html for the privacy policy page.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/privacy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/privacy"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET privacy`


<!-- END_b31353d8308de761c8cb9e4d41a07df3 -->

<!-- START_66e08d3cc8222573018fed49e121e96d -->
## Show the application&#039;s login form.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET login`


<!-- END_66e08d3cc8222573018fed49e121e96d -->

<!-- START_ba35aa39474cb98cfb31829e70eb8b74 -->
## Handle a login request to the application.

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST login`


<!-- END_ba35aa39474cb98cfb31829e70eb8b74 -->

<!-- START_e65925f23b9bc6b93d9356895f29f80c -->
## Log the user out of the application.

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST logout`


<!-- END_e65925f23b9bc6b93d9356895f29f80c -->

<!-- START_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->
## Show the application registration form.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET register`


<!-- END_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->

<!-- START_d7aad7b5ac127700500280d511a3db01 -->
## Handle a registration request for the application.

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST register`


<!-- END_d7aad7b5ac127700500280d511a3db01 -->

<!-- START_d72797bae6d0b1f3a341ebb1f8900441 -->
## Display the form to request a password reset link.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET password/reset`


<!-- END_d72797bae6d0b1f3a341ebb1f8900441 -->

<!-- START_feb40f06a93c80d742181b6ffb6b734e -->
## Send a reset link to the given user.

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/password/email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/password/email"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/email`


<!-- END_feb40f06a93c80d742181b6ffb6b734e -->

<!-- START_e1605a6e5ceee9d1aeb7729216635fd7 -->
## Display the password reset view for the given token.

If no token is present, display the link request form.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/password/reset/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/password/reset/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET password/reset/{token}`


<!-- END_e1605a6e5ceee9d1aeb7729216635fd7 -->

<!-- START_cafb407b7a846b31491f97719bb15aef -->
## Reset the given user&#039;s password.

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/reset`


<!-- END_cafb407b7a846b31491f97719bb15aef -->

<!-- START_b77aedc454e9471a35dcb175278ec997 -->
## Display the password confirmation view.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/password/confirm"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET password/confirm`


<!-- END_b77aedc454e9471a35dcb175278ec997 -->

<!-- START_54462d3613f2262e741142161c0e6fea -->
## Confirm the given user&#039;s password.

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/password/confirm"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/confirm`


<!-- END_54462d3613f2262e741142161c0e6fea -->

<!-- START_53be1e9e10a08458929a2e0ea70ddb86 -->
## Returns the html for the catalog home page.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET /`


<!-- END_53be1e9e10a08458929a2e0ea70ddb86 -->



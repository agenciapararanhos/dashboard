

INSTRUÇÕES API

ENDPOINTS:
/jsonapi
/login
/logout

attributes: {product.id: "1", product.url: "Demo-article", product.type: "default", product.code: "demo-article", product.label: "Demo article", …}
id: "1"
allow: ["POST"]
href: "http://127.0.0.1:8000/jsonapi/basket?id=default&related=product"
allow: ["GET"]
href: "http://127.0.0.1:8000/jsonapi/product?id=1"



JQUERY GET EXEMPlO:
            var url = '/jsonapi';
            
            var options = $.ajax( url, {
                method: "OPTIONS",
                dataType: "json"
            });
            
            options.done( function( servicedesc ) {
                var params = {};
            
                var result = $.ajax({
                    method: "GET",
                    dataType: "json",
                    url: servicedesc.meta.resources['product'],
                    data: params
                });
            
                result.done( function( result ) {
                    console.log( result.data );
                });
            });
return: https://prnt.sc/vnoaog



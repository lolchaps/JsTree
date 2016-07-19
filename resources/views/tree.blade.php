<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="Page Description">
        <meta name="author" content="mackhankins">
        <title>JsTree Example</title>

        <!-- Font-Awesome -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">

        <!--JsTree 3.3.1 -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.3.1/themes/default/style.min.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <h1>JsTree Example</h1>
        <div id="jstree"></div>

        <!-- jQuery (necessary for JsTree) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- JsTree 3.3.1 -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.3.1/jstree.min.js"></script>

        <script type="text/javascript">
            $('#jstree').jstree({
                'core': {
                    'data': {
                        'url': '{{ route('tree.data') }}',
                        'data': function (node) {
                            return {'id': node.id};
                        },
                    'error': function (data) {
                            $('#jstree').html('<p>We had an error...</p>');
                        }
                    },
                }
            });

            $('#jstree').on("changed.jstree", function (e, data) {
                console.log("The selected nodes are:");
                console.log(data.selected);
              });
        </script>
    </body>
</html>
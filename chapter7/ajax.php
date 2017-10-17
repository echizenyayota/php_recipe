<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>JSON形式のデータを読み込む</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>
      $(function() {
        $('#load').on("click", function(){
          $.getJSON("json.php", function(data){
            for (var i in data) {
              var tr = $("<tr>");
              var td_item = $("<td>").text(data[i].item);
              tr.append(td_item);
              var td_price = $("<td>").text(data[i].price);
              tr.append(td_item);
              var td_item = $("<td>").text(data[i].orders);
              tr.append(td_orders);

              $('#listbox').append(tr);

              $('#load').hide();
            }
          });
        });
      });
    </script>
</head>
<body>
    <div>
      <input type="button" value="読み込み" id="load">
      <table id="listbox">
        <tr>
          <th>品名</th>
          <th>価格</th>
          <th>注文数</th>
        </tr>
    </div>
</body>
</html>

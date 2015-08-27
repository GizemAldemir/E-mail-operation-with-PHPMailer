//Mail gonderen kisiden bilgileri aldıgım bir sayfa. HTML ve minik CSS kodlari ile olusturuldu.

<hmtl>

   <head>
       <title>COMPOSE E-MAIL</title>
   <style>
       textarea
       {
           border:1px solid black;
           padding:100px;
           margin:10px;
       }

        body
        {
              background-color: skyblue;
        }

   </style>


   </head>
    <body>

<div align="center">
    <form action="mailalis.php" name="mail_form" method="post">
        From : <br>
        <input type="text" name="from" size="30"> <br>
        To : <br>
        <input type="text" name="to" size="30"> <br>
        Subject : <br>
        <input type="text" name="subject" size="40"> <br>
        Mail : <br>
        <textarea name="mail"></textarea><br><br>
        <input type="submit" value="Send">
        <input type="reset" value="Reset">

    </form>
</div>
    </body>



</hmtl>

/* ############# Table of price ################# */
#customers {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 50%;
    margin-left: 23%;
  }
  
  #customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
  }
  
  #customers tr:nth-child(even){background-color: #f2f2f2;}
  
  #customers tr:hover {background-color: #ddd;}
  
  #customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #045f16;
    color: white;
  }
h1.ticket{
    margin-left: 5%;
    color: #045f16;
}
/* ############# Form for ticket ################# */
/* input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  
  div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
  } */

  input[type=text]{
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    margin-left: 5%;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  input[type=number]{
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    margin-left: 5%;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  input[type=date]{
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    margin-left: 5%;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
button.submit_button{
    text-align: center;
    color: #fff;
    padding: 10px 125px 10px 125px;
    background-color: #045f16;
    border-color: #045f16;
    margin-left: 65px;
    font-size: 15px;
    font-weight: 600;
    
}
h1.foreign_ticket{
    color: #045f16;
}
h6{
    color: #f2f2f2;
}
  /* ############# Mobile View ################# */
@media screen and (max-width: 680px) {
    #customers {
        width: 80%;
        margin-left: 10%;
      }
  }
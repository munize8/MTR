

<!--======= CALL TO ACTION PANEL =========-->
<div class="call_to_panel">
    <div class="container">
        <script type="text/javascript">
               document.getElementById('outer_banner').outerHTML = '' ;
                var t = setInterval(function(){get_chat_msg()},1000);


                //
                // General Ajax Call
                //

                var oxmlHttp;
                var oxmlHttpSend;

                function get_chat_msg()
                {

                    if(typeof XMLHttpRequest != "undefined")
                    {
                        oxmlHttp = new XMLHttpRequest();
                    }
                    else if (window.ActiveXObject)
                    {
                       oxmlHttp = new ActiveXObject("Microsoft.XMLHttp");
                    }
                    if(oxmlHttp == null)
                    {
                        alert("Browser does not support XML Http Request");
                       return;
                    }

                    oxmlHttp.onreadystatechange = get_chat_msg_result;
                    oxmlHttp.open("GET","<?php echo base_url();?>/chat/chat_recv_ajax.php",true);
                    oxmlHttp.send(null);
                }

                function get_chat_msg_result()
                {
                    if(oxmlHttp.readyState==4 || oxmlHttp.readyState=="complete")
                    {
                        if (document.getElementById("DIV_CHAT") != null)
                        {
                            document.getElementById("DIV_CHAT").innerHTML =  oxmlHttp.responseText;
                            oxmlHttp = null;
                        }
                        var scrollDiv = document.getElementById("DIV_CHAT");
                        scrollDiv.scrollTop = scrollDiv.scrollHeight;
                    }
                }


                function set_chat_msg()
                {

                    if(typeof XMLHttpRequest != "undefined")
                    {
                        oxmlHttpSend = new XMLHttpRequest();
                    }
                    else if (window.ActiveXObject)
                    {
                       oxmlHttpSend = new ActiveXObject("Microsoft.XMLHttp");
                    }
                    if(oxmlHttpSend == null)
                    {
                       alert("Browser does not support XML Http Request");
                       return;
                    }

                    var url = "<?php echo base_url();?>/chat/chat_send_ajax.php";
                    var strname="noname";
                    var strmsg="";
                    if (document.getElementById("txtname") != null)
                    {
                        strname = document.getElementById("txtname").value;
                        document.getElementById("txtname").readOnly=true;
                    }
                    if (document.getElementById("txtmsg") != null)
                    {
                        strmsg = document.getElementById("txtmsg").value;
                        document.getElementById("txtmsg").value = "";
                    }

                    url += "?name=" + strname + "&msg=" + strmsg;
                    oxmlHttpSend.open("GET",url,true);
                    oxmlHttpSend.send(null);
                }

                </script>
        
        <div style="border-right: lightslategray thin solid; border-top: lightslategray thin solid;
             border-left: lightslategray thin solid; width: 500px; border-bottom: lightslategray thin solid;
             height: 500px">
            <table style="width:100%; height:100%">
                <tr>
                    <td colspan="2" style="font-weight: bold; font-size: 16pt; color: blue; font-family: verdana, arial;
                        text-align: center">
                        Chat</td>
                </tr>
                <tr>
                    <td colspan="2" style="font-weight: bold; font-size: 16pt; color: blue; font-family: verdana, arial;
                        text-align: left">
                        <table style="font-size: 12pt; color: black; font-family: Verdana, Arial">
                            <tr>
                                <td style="width: 100px">
                                    Name:</td>
                                <td style="width: 100px"><input id="txtname" hidden="true" style="width: 150px" type="text" name="name" maxlength="15" value="<?php echo 'user'.rand(0,999); ?>" /></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="vertical-align: middle;" valign="middle" colspan="2">
                        <div style="width: 480px; height: 400px; border-right: darkslategray thin solid; border-top: darkslategray thin solid; font-size: 10pt; border-left: darkslategray thin solid; border-bottom: darkslategray thin solid; font-family: verdana, arial; overflow:scroll; text-align: left;" id="DIV_CHAT">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="width: 310px">
                        <input id="txtmsg" style="width: 350px" type="text" name="msg" /></td>
                    <td style="width: 85px">
                        <input id="Submit2" style="font-family: verdana, arial" type="button" value="Send" onclick="set_chat_msg()"/></td>
                </tr>
                <tr>
                    <td colspan="1" style="font-family: verdana, arial; text-align: center; width: 350px;">
                    </td>
                    <td colspan="1" style="width: 85px; font-family: verdana, arial; text-align: center">
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>



<!--======= Services panel=========-->
<div class="services_panel">
    <div class="container">
        <div class="col-md-4">
            <h3>Success Stories</h3>
            <div class="success_box">
                <div class="success_box_inner">
                    <img src="<?php echo base_url('assets'); ?>/images/img8.jpg">
                    <h2>Success Stories</h2>
                    <p>"Lorem ipsum dolor sit amet,  consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore .”</p>
                    <a href="#"><img src="<?php echo base_url('assets'); ?>/images/red_arrow.png"></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <h3>Featured Brides</h3>
            <ul class="featured_list">	
                <li>
                    <div class="featured_box">
                        <div class="featured_img"><img src="<?php echo base_url('assets'); ?>/images/img4.jpg"></div>
                        <div class="featured_content">
                            <h2>Hanusha</h2>
                            <p>26, BA, MA, <br />Hindu, Vishwakara<br />City, State.</p>
                            <a href="#"><img src="<?php echo base_url('assets'); ?>/images/red_arrow.png"></a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="featured_box">
                        <div class="featured_img"><img src="<?php echo base_url('assets'); ?>/images/img5.jpg"></div>
                        <div class="featured_content">
                            <h2>Hanusha</h2>
                            <p>26, BA, MA, <br />Hindu, Vishwakara<br />City, State.</p>
                            <a href="#"><img src="<?php echo base_url('assets'); ?>/images/red_arrow.png"></a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="col-md-4">
            <h3>Featured Grooms</h3>
            <ul class="featured_list">	
                <li>
                    <div class="featured_box">
                        <div class="featured_img"><img src="<?php echo base_url('assets'); ?>/images/img2.jpg"></div>
                        <div class="featured_content">
                            <h2>Harish</h2>
                            <p>26, BA, MA, <br />Hindu, Vishwakara<br />City, State.</p>
                            <a href="#"><img src="<?php echo base_url('assets'); ?>/images/red_arrow.png"></a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="featured_box">
                        <div class="featured_img"><img src="<?php echo base_url('assets'); ?>/images/img3.jpg"></div>
                        <div class="featured_content">
                            <h2>Harish</h2>
                            <p>26, BA, MA, <br />Hindu, Vishwakara<br />City, State.</p>
                            <a href="#"><img src="<?php echo base_url('assets'); ?>/images/red_arrow.png"></a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

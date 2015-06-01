    /* author's comment: fuck javascript */
    
    // opacity functions
    
    var k=1;
    
    function navigationFade(curNum, num) {

     k++;
     
      if(num == k) {
        opacity('nav_ul_' + curNum, 0, 100, 300);
      }
        
    }
    
    function opacity(id, alpha_start, alpha_end, ms) {
    
        var speed = Math.round(ms / 100);
        var time = 0;

        // reduce opacity
        if(alpha_start > alpha_end) {
          for(i = alpha_start; i >= alpha_end; i--) {
            setTimeout("setOpacity(" + i + ",'" + id + "')",(time * speed));
                time++;
          }
        }
        
        // increase opacity
        else if(alpha_start < alpha_end) {
          for(i = alpha_start; i <= alpha_end; i++) {
                setTimeout("setOpacity(" + i + ",'" + id + "')",(time * speed));
                time++;
          }
        }
        
    }

    function setOpacity(opacity, id) {
        var object = document.getElementById(id).style;
        object.opacity = (opacity / 100);
        object.filter = "alpha(opacity=" + opacity + ")";
    } 
    

    
    /* pop-up window for item collection view */
    
    function popUp(url) {
    
    setDisplay('smokescreen'); 
    
      if( document.getElementById('popUpBox').style.display=='none' ) { 
      
        document.getElementById('popUpBox').style.display = '';
        
        document.getElementById('popUp').innerHTML = "<a onclick=\"setDisplay('popUpBox'); setDisplay('smokescreen');\"><img src=\"" + url + "\" \/>\<\/a>\<\/p>";
        
      } 
      
      else { 
        document.getElementById('popUpBox').style.display = 'none';
      }
    
    }
    
    function cardPopUp(url) {
    
    setDisplay('smokescreen'); 
    
      if( document.getElementById('cardPopUpBox').style.display=='none' ) { 
      
        document.getElementById('cardPopUpBox').style.display = '';
        
        document.getElementById('cardPopUp').innerHTML     = 
        "<img src=\"" + url + "\" title=\"" + ajax_close_w + "\" \/>\<\/a>\<\/p>";
        
      } 
      
      else { 
        document.getElementById('cardPopUpBox').style.display = 'none';
      }
    
    }
    
    function showCard(id) {
      
    }
    
    function show(id) {

     if( document.getElementById('desc_' + id).style.display=='none' ) {
     
       document.getElementById('desc_' + id).style.display = '';
       document.getElementById('show_' + id).style.display = 'none';
       
     }
      
     else {
     
      document.getElementById('desc_' + id).style.display = 'none';
     
     }
     
    }
    
    function setDisplay(id) {

     if(document.getElementById(id).style.display=='none' ) {
     
       document.getElementById(id).style.display = ''; 
     
     }
     
     else {
     
       document.getElementById(id).style.display = 'none'; 
     
     }
     
    }
    
    function showprop(id,eventid, type) { 
    
      if( document.getElementById(id).style.display=='none' ) { 
        document.getElementById(id).style.display = '';
        document.getElementById('ajaxDialogue').innerHTML     = ajax_action + " \<p>\<a onclick=\"getDropInfo('" + eventid + "','" + type + "'); showprop('ajaxFrame'); setDisplay('smokescreen')\">" + ajax_add_cur + "\<\/a>\<br \/>\<a href=\"?act=" + type + "&cid=on&amp;id=" + eventid + "\">" + ajax_new_src + "\<\/a>\<br \/>\<a href=\"javascript: showprop('ajaxFrame'); setDisplay('smokescreen')\">" + ajax_close_d + "\<\/a>\<\/p>";
      } 
      else { 
        document.getElementById(id).style.display = 'none';
      }
    }
    
    /* slightly modified ajax function from w3schools */
    
    var xmlHttp;

    function getSuggest(str,id,type) {
    
      if (str.length==0) { 
        document.getElementById(id).innerHTML="";
        return;
      }
      
      if (str.length>15) { 
        document.getElementById(id).innerHTML="";
        return;
      }
      
      xmlHttp=new XMLHttpRequest();
      
      if (xmlHttp==null) {
        return;
      } 
      
      var url="suggest.php";
      url=url+"?q="+str;
      url=url+"&sid="+Math.random();
      url+="&type="+type;
      xmlHttp.onreadystatechange=stateChanged;
      xmlHttp.open("GET",url,true);
      xmlHttp.send(null);
    } 

    function stateChanged() { 
      if (xmlHttp.readyState==4) { 
        document.getElementById("sName1").innerHTML=xmlHttp.responseText;
      }
    }

    /* insert monster name */

    function insertSuggest(name) {
      document.getElementById('name').value = name;
    }

    /* mob search ajax */

    var xmlhttp;

    function getDropInfo(id,type) {

      xmlhttp=null;
      xmlhttp=new XMLHttpRequest();
      
      if (xmlhttp!=null) {
        var url="ajax.php";
        url=url+"?act=" + type + "&cid=on&id="+id;
            
        xmlhttp.onreadystatechange=state_Change;
        xmlhttp.open("GET",url,true);
        xmlhttp.send(null);
      }
    }

    var updID = 'AllSearchResults';

    function state_Change() {
    
      if (xmlhttp.readyState==4) {

        if (xmlhttp.status==200) {
          document.getElementById(updID).innerHTML= document.getElementById(updID).innerHTML + xmlhttp.responseText;
        }
        
        else {
          alert("Problem retrieving data:" + xmlhttp.statusText);
        }
      
      }
    }

    /* activate check boxes */

      function checkBox(id) {
        document.getElementById(id).checked = 'true';
      }
      
    /* Mob view list monster details expand */
    
      function expand_monster(idname, mid) {
    
      var pNode = document.getElementById(idname);
    
      if(pNode.parentNode.style.display == 'none') { 
        if(pNode.innerHTML == '') {
        updID=idname; 
        getDropInfo(mid,'mobsearch'); 
        pNode.style.padding = '10px';
        }
        pNode.parentNode.style.display = ''; 
      } 
      else { 
        pNode.parentNode.style.display = 'none';
      }
      
      }
      
    /* Flagging - change colour */
    
    function flag_color(id, color) {
    
      document.getElementById(id).style.background = color;
      
    }
    
    /* Remove unflagged */
    
    function removeNoneFlagged() {
    
      var trs = document.body.getElementsByTagName("tr");
      
      for(i=0; i < trs.length; i++) {
      
        document.write(trs[i].childNodes[12].align);
        //if(trs[i].childNodes[13].childNodes[0].checked == true) {
        //if(trs[i].childNodes[13].childNodes[0].checked == true) {
        //trs[i].style.display = 'none';
        //}
      
      }
    
    }
    
    //onkeypress="{if (event.keyCode==13)fireMyFunction()}"

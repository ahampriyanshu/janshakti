.abt_index {
    background: #fff;
    border: 1px solid #e2e2e2;
    box-shadow: 0 0 5px #888;
    border-radius: 4px;
    padding-top: 25px;
    width: 850px;
    height: 500px;
    position: absolute;
    overflow: hidden;
    top: 9%;
    background-repeat: no-repeat;
    background-size: contain;
    }

    .tech_used:hover{
    transform: scale(1.2);
    }
    #bulb_index:hover{
    transform: scale(1.01);
    }


--balloon-color: rgba(16,16,16,0.95);
--balloon-font-size: 12px;
--balloon-move: 4px;
--color-bg: #f3f7f7;
--color-bg-2: #e7eeef;
--color-white: #fff;
--color-shade-lighter: #f3f7f7;
--color-shade-light: #e7eeef;
--color-shade-medium: #b7c9cc;
--color-shade-dark: #738f93;
--color-text-light: #b7c9cc;
--color-text-medium-dark: #39424e;
--color-text-dark: #0e141e;
--color-text-dark-faded: #576871;
--modal-overlay-color: rgba(231,238,239,0.9);
--active-tab-color: #000;
--select-border-color: #b3b3b3;
--font-family-text: OpenSans, Arial, Helvetica, sans-serif;
--font-family-input: SourceCodePro, monaco, Courier, monospace;
color: #39424e;
-webkit-font-smoothing: antialiased;
border: 0;
font: inherit;
font-size: 100%;
margin: 0;
outline: 0;
padding: 0;
vertical-align: baseline;


<div class="abt_index" id ="abt_visibility" style="position: absolute; top:12%;left:5%; ">
      <img  id="bulb_index" src="img/bulb_on.png"   alt="logo"  width="500px"   height="500px;"
      onmouseover="this.src='img/bulb_on.png';"  onmouseout="this.src='img/bulb_off.png';" style="position:relative; top:-11%; left:21% ;  border="" />
      <img class=' tech_used ' src='img/php.png'  style="position:absolute; left:13%; bottom:3%; title="php" width="75px" height="60px" border="" />
      <img class=" tech_used" src="img/css.png"  style="position:absolute; left:32% ; bottom:3%; " title="CSS3" width="50px" height="60px" border="" />
      <img class=" tech_used" src="img/mysql.png"  style="position:absolute; left:47% ; bottom:3%; " title="mysql" width="60px" height="60px" border="" />
      <img class=" tech_used" src="img/html.png"  style="position:absolute; left:62% ; bottom:3%; " title="HTML5" width="60px" height="60px" border="" />
      <img class=" tech_used" src="img/js.png"  style="position:absolute; left:77% ; bottom:3%; " title="JS" width="60px" height="60px" border="" />
    </div>
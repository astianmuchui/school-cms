var open = document.getElementById("open");
              var content = document.getElementById("dropdown");
              var close = document.getElementById("close");
              open.onclick = function open(){
                  content.style.display = "block";
              }
              
                close.onclick = function(){
                  content.style.display = "none";
              }
              

              //Open Menu


              var menu = document.getElementById("menu");
              var nav = document.getElementById("nav");
              menu.onclick = function(){
                nav.style.display="flex";
              }
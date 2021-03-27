var open = document.getElementById("open");
              var content = document.getElementById("dropdown");
              var close = document.getElementById("close");
              open.onclick = function open(){
                  content.style.display = "block";
              }
              
                close.onclick = function(){
                  content.style.display = "none";
              }
              
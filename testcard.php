<body>
<link href="home-style.css" rel="stylesheet">
<link href="testcard-style.css" rel="stylesheet">
<link href="style-create room.css" rel="stylesheet">
    <div id="toggle"></div>
    <div id="sidebar">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Menu</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="logout.inc.php">Log out</a></li>
        </ul>
    </div>
    <!-- card1 -->
    <div class="container">
        <div class="card">
            <div class="face face1">
                <div class="content">
                    <center><img src="https://github.com/Jhonierpc/WebDevelopment/blob/master/CSS%20Card%20Hover%20Effects/img/design_128.png?raw=true"></center>
                    <h3>Create Room</h3>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                <p>
      <button class="button" data-modal="modalOne">Create Room</button>
    </p>
   
                </div>
            </div>
        </div>
        <div id="modalOne" class="modal">
      <div class="modal-content">
        <div class="contact-form">
          <a class="close">&times;</a>
          <form action="/">
            <h2>Create Room</h2>
            <div>
              <input class="fname" type="text" name="name" placeholder="Full name" />
              <input type="text" name="name" placeholder="Email" />
              <input type="text" name="name" placeholder="Phone number" />
              <input type="text" name="name" placeholder="Website" />
            </div>
            <span>Message</span>
            <div>
              <textarea rows="4"></textarea>
            </div>
            <button type="submit" href="/">Submit</button>
          </form>
        </div>
      </div>
    </div>
        <!-- card2 -->
        <div class="card">
            <div class="face face1">
                <div class="content">
                <center><img src="https://github.com/Jhonierpc/WebDevelopment/blob/master/CSS%20Card%20Hover%20Effects/img/code_128.png?raw=true"></center>
                    <h3>check name</h3>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                <p>
      <button class="button" data-modal="modalTwo">check name</button>
    </p>
                </div>
            </div>
        </div>
        <div id="modalTwo" class="modal">
      <div class="modal-content">
        <div class="contact-form">
          <span class="close">&times;</span>
          <form action="/">
            <h2>check name</h2>
            <div>
              <input class="fname" type="text" name="name" placeholder="Full name" />
              <input type="text" name="name" placeholder="Email" />
              <input type="text" name="name" placeholder="Phone number" />
              <input type="text" name="name" placeholder="Website" />
            </div>
            <span>Message</span>
            <div>
              <textarea rows="4"></textarea>
            </div>
            <button type="submit" href="/">Submit</button>
          </form>
        </div>
      </div>
    </div>
        <!-- card3 -->
        <div class="card">
            <div class="face face1">
                <div class="content">
                    <img src="https://github.com/Jhonierpc/WebDevelopment/blob/master/CSS%20Card%20Hover%20Effects/img/launch_128.png?raw=true">
                    <h3>Launch</h3>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cum cumque minus iste veritatis provident at.</p>
                        <a href="#">Read More</a>
                        <!-- side bar -->
                        <script>
    const toggle = document.getElementById('toggle');
    const sidebar = document.getElementById('sidebar');

    document.onclick = function(e){
        if(e.target.id !== 'sidebar' && e.target.id !== 'toggle')
        {
            toggle.classList.remove('active');
            sidebar.classList.remove('active');
        }
    }

    
    
    toggle.onclick = function(){
        toggle.classList.toggle('active');
        sidebar.classList.toggle('active');
    }
    </script>
    <!-- pop up card -->
    <script>
      let modalBtns = [...document.querySelectorAll(".button")];
      modalBtns.forEach(function (btn) {
        btn.onclick = function () {
          let modal = btn.getAttribute("data-modal");
          document.getElementById(modal).style.display = "block";
        };
      });
      let closeBtns = [...document.querySelectorAll(".close")];
      closeBtns.forEach(function (btn) {
        btn.onclick = function () {
          let modal = btn.closest(".modal");
          modal.style.display = "none";
        };
      });
      window.onclick = function (event) {
        if (event.target.className === "modal") {
          event.target.style.display = "none";
        }
      };
    </script>


                </div>
            </div>
        </div>
    </div>
</body>
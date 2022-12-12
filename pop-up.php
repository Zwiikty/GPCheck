
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

  <!-- pop up list-->
  <div id="modalroomlist" class="modal">
    <div class="modal-content">
      <div class="contact-form">
        <a class="close">&times;</a>
          <h2>Create room : </h2>
          <div>
            <input class="fname" type="text" name="r_name" placeholder="ชื่อห้อง" />
            <input type="datetime-local" name="datetime" placeholder="วันที่/เวลา" />
          </div>
          <button type="submit" name="roomsubmit" onclick="">Submit</button>
      </div>
    </div>
  </div>

<?php 
  function NavBar() {
    return '
              <ul id="about">
                  <li><a href="#Dascal" title="Who is dascal?" href="dascal.php">Who is dascal?</a></li>
                  <li><a href="#Members" onclick='slowScroll("#Members")' title="Members">Members</a></li>
                  <li><a href="#" onclick='slowScroll("#contacts")' title="Contacts" ><label class="btn" for="modal-1">Contacts</a></li>
                  <li><a href="#Albums" onclick='slowScroll("#Albums")' title="Music/Albums">Music/Albums</a></li>
              </ul>
    ';
  }
?>
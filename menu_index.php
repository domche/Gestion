
<!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu"> 
              <?php if(isset($_GET['contenu'])){ 
			  $contenue = $_GET['contenu'] ;
			  }?>    
               <?php if(!isset($_GET['contenu'])|| $contenue="active"){ ?>         
                  <li class="active">
                      <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Accueil</span>
                      </a>
                  </li>
				   <?php
			   }
			   ?>
				  <li class="">
                      <a href="?contenu=Consultater" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Consultater</span>
                      </a>
                  </li>
                  <li>
                      <a class="" href="#">
                          <i class="icon_genius"></i>
                          <span>Enregistrer</span>
                      </a>
                  </li>
                  <li>                     
                      <a class="" href="#">
                          <i class="icon_piechart"></i>
                          <span>Stocker</span>
                          
                      </a>
                                         
                  </li>
				  <!--       
                             
                  <li class="">
                      <a href="#" class="">
                          <i class="icon_table"></i>
                          <span>Contacts</span>
                      </a>
                  </li>
				  -->
				   <li class="">
                      <a href="#" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Archives</span>
                      </a>
                  </li>
				  <li class="">
                      <a href="#" class="">
                          <i class="icon_flowchart_alt"></i>
                          <span>Jeux</span>
                      </a>
                  </li>
				  <!--
                  <li class="">
                      <a href="#" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Suggestions</span>
                      </a>
                  </li>
                  -->
                 
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

<div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"> ×</a>
    <a class="navbar-brand font-weight-bold text-light " href="#">NavieaSoft</a>
    
    
    <div class="sidenav">
        
        <a class="dropdown-btn">Page
          <i class="fa fa-caret-down"></i>
        </a>
        <div class="dropdown-container">
          <a href="add.html">Add Page</a>
          <a href="Manage.html">Manage Page</a>
          
        </div>
        <a class="dropdown-btn">Post
            <i class="fa fa-caret-down"></i>
          </a>
          <div class="dropdown-container">
            <a href="add.html">Add Post</a>
            <a href="Manage.html">Manage Post</a>
            
          </div>
          <a class="dropdown-btn">Product
            <i class="fa fa-caret-down"></i>
          </a>
          <div class="dropdown-container">
            <a href="addproduct.html">Add Product</a>
            <a href="ManageProduct.html">Manage Product</a>
            
          </div>
          <a class="dropdown-btn">Banner
            <i class="fa fa-caret-down"></i>
          </a>
          <div class="dropdown-container">
            <a href="add.html">Add Banner</a>
            <a href="ManageProduct.html">Manage Banner</a>
            
          </div>
          <a class="dropdown-btn">Category
            <i class="fa fa-caret-down"></i>
          </a>
          <div class="dropdown-container">
            <a href="addCategory.html">Add Category</a>
            <a href="ManageCategory.html">Manage Category</a>
            
          </div>
          <a class="dropdown-btn">Brand
            <i class="fa fa-caret-down"></i>
          </a>
          <div class="dropdown-container">
            <a href="add.html">Add Brand</a>
            <a href="ManageCategory.html">Manage Brand</a>
          </div>
          <a class="dropdown-btn">Attribute
            <i class="fa fa-caret-down "></i>
          </a>
          <div class="dropdown-container">
            <a href="add.html">Add Attribute</a>
            <a href="ManageCategory.html">Manage Attribute</a>
            
          </div>
          <a class="dropdown-btn">Option
            <i class="fa fa-caret-down"></i>
          </a>
          <div class="dropdown-container">
            <a href="add.html">Add Option</a>
            <a href="ManageCategory.html">Manage Option</a>
            
          </div>
        
      </div> 
      <script>
          var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
} 
      </script>
  
  
      
  </div>
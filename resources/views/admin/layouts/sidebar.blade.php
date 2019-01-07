 
 <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Vahram Tsaturyan</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <ul class="sidebar-menu">
        <li class="active treeview"> 
          <ul class="treeview-menu">
            <li ><a href="{{route('post.index')}}"><i class="fa fa-circle-o"></i> Post</a></li>
            <li><a href="{{route('category.index')}}"><i class="fa fa-circle-o"></i> Categories</a></li>
            <li><a href="{{route('tag.index')}}"><i class="fa fa-circle-o"></i> Tags</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Users</a></li>
          </ul>
        </li>         
      </ul>
    </section>
  </aside>

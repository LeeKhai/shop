<div id="wrapper">
    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="index.html">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>List Product</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="tables.html">
                <i class="fas fa-fw fa-table"></i>
                <span>Add product</span></a>
        </li>
    </ul>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create Item</h1>
            <form action="{{ route('itemController.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group has-error">
                    <label for="slug">Slug <span class="require">*</span> <small>(This field use in url path.)</small></label>
                    <input type="text" class="form-control" name="slug"/>
                </div>

                <div class="form-group">
                    <label for="name">Name <span class="require">*</span></label>
                    <input type="text" class="form-control" name="name"/>
                </div>

                <div class="form-group">
                    <label for="link_affiliate">Link Affiliate <span class="require">*</span></label>
                    <input type="text" class="form-control" name="link_affiliate"/>
                </div>

                <div class="form-group">
                    <label for="price">Price <span class="require">*</span></label>
                    <input type="text" class="form-control" name="price"/>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea rows="5" class="form-control" name="description"></textarea>
                </div>

                <div class="form-group">
                    <p><span class="require">*</span> - required fields</p>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        Create
                    </button>
                    <button class="btn btn-default">
                        Cancel
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Sticky Footer -->
<footer class="sticky-footer">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2020</span>
        </div>
    </div>
</footer>

</div>
<!-- /.content-wrapper -->

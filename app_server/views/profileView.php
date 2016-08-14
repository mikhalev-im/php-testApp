<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-md-offset-3">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="/public/img/380x500.png" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4><?php echo $data['username'];?></h4>
                        <small><cite title="Syktyvkar, Russia"><?php echo $data['location'];?> <i class="glyphicon glyphicon-map-marker">
                        </i></cite></small>
                        <p>
                            <i class="glyphicon glyphicon-envelope"></i><?php echo $data['email'];?>
                            <br />
                            <i class="glyphicon glyphicon-globe"></i><a href="http://localhost:8000"><?php echo $data['website'];?></a>
                            <br />
                            <i class="glyphicon glyphicon-gift"></i><?php echo $data['birthdate'];?>
                        </p>
                        <form action="/login/logout" method="POST">
                            <button type="submit" class="btn btn-primary">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

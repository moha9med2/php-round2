@extends('layout')

@section('title')
home page
@endsection

@section('page-header')
home page
@endsection

@section('body')
<!-- Main Content-->

{{$title}}

@foreach($arr as $item)
{{$item}}
@endforeach






<div class="container px-4 ">
    <div class="row gx-1 justify-content-center">
        <?php //while ($row = mysqli_fetch_assoc($result)) { 
        ?>

        <div class="col-md-4">
            <!-- Post preview-->
            <div class="post-preview">
                <a href="post.php">
                    <h2 class="post-title"><?php //echo $row['title'] 
                                            ?></h2>
                    <img src="assets/posts/<?php //echo $row['image'] 
                                            ?>" width="100">
                </a>
                <p class="post-meta">
                    Posted by
                    <a href="#!"><?php //echo $row['username'] 
                                    ?></a>
                    <?php //echo $row['date'] 
                    ?>
                </p>
            </div>
            <!-- Divider-->
            <hr class="my-4" />
        </div>
        <? php //  } 
        ?>

    </div>
</div>
@endsection


@section('bg')
contact-bg.jpg
@endsection
<!DOCTYPE html>
<html>

<head>
    <title>funCED - Comment, Edit, Delete - All in One Place.</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            text-align: center;
        }

        .post-container {
            width: 300px;
            margin: 20px auto;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
        }

        .RowContainer {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
        }

        .post-image {
            width: 100%;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .post-actions {
            margin: 10px;
            display: flex;
            justify-content: space-between;
        }

        .like-button {
            color: grey;
            cursor: pointer;
            font-size: 25px;
        }

        .post-comment-button {
            background-color: #4CAF50;
            /* Green */
        }

        .delete-post-button {
            background-color: #eb411b;
            /* Red */
        }

        .edit-comment-button {
            background-color: #4e96e2;
            /* Blue */
        }

        .post-comment-button,
        .delete-post-button,
        .edit-comment-button {
            cursor: pointer;
            font-weight: bold;
            padding: 5px 10px;
            border-radius: 5px;
            color: white;
            text-align: center;
            text-decoration: none;
        }

        .comment-input {
            width: 89%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin: 10px;
        }

        .comment-list {
            margin: 10px;
        }

        .comment {
            border: 1px solid #ccc;
            padding: 5px;
            margin: 5px 0;
            display: flex;
            justify-content: space-between;
            border-radius: 4px;
            background-color: #fff;
        }



        h1 {
            font-size: 36px;
            font-weight: bold;
            margin: 0;
        }

        .slogan {
            font-size: 18px;
            margin-top: 10px;
            right: 50px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>funCED</h1>
        <h4 class="slogan">Comment, Edit, Delete - All in One Place.</h4>
        <!-- 1st Row -->
        <!-- close row container here -->
        <div class="RowContainer">
           
            <form action="{{$url}}" method="post">
                @csrf
                <div class="post-container">
                    <img class="post-image" src="{{asset('asset\images\1.jpg')}}" alt="Image 1">
                    <div class="post-actions">
                        <span class="like-button" id="like-button1" onclick="likeDislike(1)">&#x2665;</span>
                        <!-- <span id="like-count1">0 like</span> -->
                    </div>
                    <input class="comment-input" type="text" placeholder="Add a comment..." value="{{isset($edit_data->comments) ? $edit_data->comments : ''}}" name="comments">
                    <div class="comment-list">
                        
                        <div class="comment">
                            <span class="comment-text">{{isset($id_data[1]->comments) ? $id_data[1]->comments : ''}}</span>
                        </div>
                        
                        <button type="submit" class="post-comment-button">Post</button>
                        <a href="{{route('edit',['id'=>1])}}" class="edit-comment-button">edit</a>
                        <button class="delete-post-button"><a href="{{route('delete',['id'=>1])}}">Delete</a></button>
                    </div>
                </div>
            </form>
            <form action="{{route('store',['id'=>2])}}" method="post">
                @csrf
                <div class="post-container">
                    <img class="post-image" src="{{asset('asset\images\2.jpg')}}" alt="Image 1">
                    <div class="post-actions">
                        <span class="like-button" id="like-button2" onclick="likeDislike(2)">&#x2665;</span>
                        <!-- <span id="like-count2">0 like</span> -->
                    </div>
                    <input class="comment-input" type="text" placeholder="Add a comment..." value="" name="comments">
                    <div class="comment-list">
                        <div class="comment">
                            <span class="comment-text">{{isset($id_data[2]->comments) ? $id_data[2]->comments : ''}}</span>
                        </div>
                        <button type="submit" class="post-comment-button">Post</button>
                        <button class="edit-comment-button"><a href=""> Edit </a></button>
                        <button class="delete-post-button"><a href="">Delete</a></button>
                    </div>
                </div>
            </form>
            <form action="{{route('store',['id'=>3])}}" method="post">
                @csrf
                <div class="post-container">
                    <img class="post-image" src="{{asset('asset\images\3.jpg')}}" alt="Image 1">
                    <div class="post-actions">
                        <span class="like-button" id="like-button3" onclick="likeDislike(3)">&#x2665;</span>
                        <!-- <span id="like-count3">0 like</span> -->
                    </div>
                    <input class="comment-input" type="text" placeholder="Add a comment..." value="" name="comments">
                    <div class="comment-list">
                        <div class="comment">
                            <span class="comment-text">{{isset($id_data[3]->comments) ? $id_data[3]->comments : ''}}</span>
                        </div>
                        <button type="submit" class="post-comment-button">Post</button>
                        <button class="edit-comment-button"><a href=""> Edit </a></button>
                        <button class="delete-post-button"><a href="">Delete</a></button>
                    </div>
                </div>
            </form>
            <form action="{{route('store',['id'=>4])}}" method="post">
                @csrf
                <div class="post-container">
                    <img class="post-image" src="{{asset('asset\images\4.jpg')}}" alt="Image 1">
                    <div class="post-actions">
                        <span class="like-button" id="like-button4" onclick="likeDislike(4)">&#x2665;</span>
                        <!-- <span id="like-count4">0 like</span> -->
                    </div>
                    <input class="comment-input" type="text" placeholder="Add a comment..." value="" name="comments">
                    <div class="comment-list">
                        <div class="comment">
                            <span class="comment-text">{{isset($id_data[4]->comments) ? $id_data[4]->comments : ''}}</span>
                        </div>
                        <button type="submit" class="post-comment-button">Post</button>
                        <button class="edit-comment-button"><a href=""> Edit </a></button>
                        <button class="delete-post-button"><a href="">Delete</a></button>
                    </div>
                </div>
            </form>
        </div>
       

    </div>

    <script>
        var likeCounts = {};

        function likeDislike(postId) {
            var likeButton = document.getElementById("like-button" + postId);
            var likeCountElement = document.getElementById("like-count" + postId);

            if (likeButton.style.color === "red" || likeButton.style.color === "rgb(255, 0, 0)") {
                likeCounts[postId] = (likeCounts[postId] || 0) - 1;
                likeButton.style.color = "grey";
                likeCountElement.innerText = likeCounts[postId] + " like";
            } else {
                likeCounts[postId] = (likeCounts[postId] || 0) + 1;
                likeButton.style.color = "red";
                likeCountElement.innerText = likeCounts[postId] + " like";
            }
        }
    </script>
</body>

</html>
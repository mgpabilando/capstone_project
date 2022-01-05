    let arrow = document.querySelectorAll(".arrow");
    for (var i = 0; i < arrow.length; i++) {
        arrow[i].addEventListener("click", (e)=>{
            let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
            arrowParent.classList.toggle("showMenu");
            localStorage.setItem("showMenu", arrowParent.classList.contains("showMenu"));
        });
    }

    let sidebar = document.querySelector(".sidebar");
    let content = document.querySelector("#content");
    let sidebarBtn = document.querySelector(".fa-bars");

    if (localStorage.getItem("close") == "true")
    {
        sidebar.classList.add("close");
        content.classList.add("close");
    }
    sidebarBtn.addEventListener("click", ()=>{
        sidebar.classList.toggle("close");
        content.classList.toggle("close");
        localStorage.setItem("close", sidebar.classList.contains("close"));

    });

    $("ul li").click(function() {
        $('li').removeClass("active");
        $(this).addClass("active");
        });

    $(document).on('click','#change_picture_btn', function(){
        $('#admin_image').click();
    }); 
    
    $('#admin_image').ijaboCropTool({
        preview : '.admin_picture',
        setRatio:1,
        allowedExtensions: ['jpg', 'jpeg','png'],
        buttonsText:['CROP','QUIT'],
        buttonsColor:['#30bf7d','#ee5155', -15],
        processUrl:'{{ route("PictureUpdate") }}',
        withCSRF:['_token','{{ csrf_token() }}'],
        onSuccess:function(message, element, status){
            alert(message);
        },
        onError:function(message, element, status){
            alert(message);
        }
    });




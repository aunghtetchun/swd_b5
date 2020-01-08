let a = 1;

function titleFilter(y){
    let x = y.trim();
    if(!x){
        alert("Title is empty");
        return false;
    }else{
        if(x.length > 30){
            alert("Title is too long");
            return false;
        }
    }

    return x;
}

function del(current) {
    if(confirm("Are U Sure to Delete item-"+current)){
        let select = $("#list-item-"+current);
        if($("#list-like-"+current).attr("status") == 1){
            alert("Pls Unlike First");
        }else {
            select.fadeOut(1000,function () {
                select.remove();
            });

        }
        console.log("Delete list item "+current);
    }else{
        console.log("cancel list delete");
    }
}

function like(x){
    let select = $("#list-like-"+x);
    let status = select.attr("status");
    if(status == 0){
        select.removeClass("fa-heart-o");
        select.addClass("fa-heart");
        select.attr("status",1);
        console.log("U like list-itme "+x);

    }else{
        select.removeClass("fa-heart");
        select.addClass("fa-heart-o");
        select.attr("status",0);
        console.log("U unlike list-itme "+x);

    }
}

function update(x) {
    let select = $("#list-title-"+x);
    let newTitle = $("#list-title-"+x+" .edit-title").val();
    select.empty();
    select.append(`<p class="job-title">${newTitle}</p>`);
}

function edit(x){

    let select = $("#list-title-"+x);
    let old = $("#list-title-"+x+" .job-title").html();
    select.empty();
    select.append(`<input class="edit-title" value="${old}" onblur="update(${x})">`);
    $("#list-title-"+x+" .edit-title").focus();

    $(".edit-title").keyup(function (e) {
        if(e.keyCode == 13){
            update(x);
        }
    })

}



$(document).ready(function () {

    $("#add").on("submit",function (e) {
        e.preventDefault();
        let x = titleFilter($("#title").val());
        if(x){

            $(".list").append(`
                <div class="list-item" id="list-item-${a}">
                    <div class="list-like">
                        <i class="fa fa-heart-o like" status="0" onclick="like(${a})" id="list-like-${a}"></i>
                    </div>
                    <div class="list-title" ondblclick="edit(${a})" id="list-title-${a}">
                        <p class="job-title">${x}</p>
                    </div>
                    <div class="list-del">
                        <i class="fa fa-trash-o del" onclick="del( ${a} )"></i>
                    </div>
                </div>
                `);

            a++;
            $("#title").val("");
            console.log("Add list item "+x);
        }
    });



});
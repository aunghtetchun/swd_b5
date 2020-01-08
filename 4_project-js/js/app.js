let articles = [];

function showError(where,border,what) {
    document.getElementById(where).innerHTML = what;
    document.getElementById(border).style.border = "2px solid #ff5346";
}

function hideError(where,border) {
    document.getElementById(where).innerHTML = "";
    document.getElementById(border).style.border = "2px solid #000";
}

function validateTitle(x){
    if(!x){
        showError("titleError","title","Title is empty");
    }else{
        if(x.length < 10){
            showError("titleError","title","Title is too short");
        }else{
            if(x.length > 255){
                showError("titleError","title","Title is too long");
            }else{
                hideError("titleError","title");
                return x;
            }
        }
    }
    return false;
}
function validateDes(x){
    if(!x){
        showError("desError","des","Description is empty");
    }else{
        if(x.length < 10){
            showError("desError","des","Description is too short");
        }else{
            hideError("desError","des");
            return x;

        }
    }
    return false;
}


function addArticle(title,des){
    let date = new Date();
    let single = {title:title,description:des,like:0,date:`${date.getHours()}:${date.getMinutes()}:${date.getSeconds()}`};
    articles.push(single);
    document.getElementById('title').value="";
    document.getElementById('des').value="";
}

function like(x) {
    let old = articles[x].like;
    articles[x].like = old+1;
    postList(articles);
}

function postList(x){
    document.getElementById('show').innerHTML = "";
    for(i=x.length-1; i>=0; i--){
        document.getElementById('show').innerHTML += `
        <article class="article">
            <h1 class="article-title">${x[i].title}</h1>
            <p class="date">
                ${x[i].date}
            </p>
            <p class="article-des">${x[i].description}</p>
            <div class="article-foot">
                <span class="like" onclick="like(${i})">
                    <i class="fa ${x[i].like ?'fa-heart':'fa-heart-o' }"></i> <span class="like-count">${x[i].like}</span>
                </span>

                <span class="owner">
                    <i class="fa fa-user"></i> Hein Htet Zan
                </span>
            </div>
        </article>
        `;
    }

}


document.getElementById("addPost").addEventListener("click",function () {
    let title = validateTitle(document.getElementById("title").value);
    let des = validateDes(document.getElementById("des").value);
    if(title && des){
        addArticle(title,des);
        postList(articles);
        console.log(articles);
    }
});
<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<button>Credits</button>
<section class="credits">
  <h2>Starring: Dilip Rayamajhi, Niruta Singh</h2>
  <h2>Director: Tulsi Ghimire</h2>
  <h2>Producer: Dinesh DC</h2>
  <h3></h3>
</section>
<script>
$(document).ready(function(){
    $(".credits").css("background-color","yellow");
$('button').on('click', function () {
  $('h2').each(function (i) {
    $(this).slideUp((i + 1) * 2000)
  })
  $('h2').promise().done(() => {
    $('h3').text('The end...')
  })
});
});

function getBook(bookId) {
  return new Promise((resolve, reject) => {
    setTimeout(() => {
      let book = {
        title: "JavaScript",
        authorId: "123"
      }
    
      resolve(book);
    }, 500);
  });
}
function getAuthor(authorId) {
  return new Promise((resolve, reject) => {
    setTimeout(() => {
      let author = {
        name: "Amy",
        age: 28
      }
      resolve(author);
    }, 500);
  });
}
async function fetchData() {
  let book = await getBook(2020);
  let author = await getAuthor(book.authorId);
  console.log(author)
}
fetchData(); 
</script>
    
</body>
</html>
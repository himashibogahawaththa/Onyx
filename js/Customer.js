const button = document.querySelector("button");
const quote = document.querySelector("i");
const cite = document.querySelector("span");

async function updateQuote() {
  button.innerHTML = "> > > >";
  const response = await fetch("https://api.quotable.io/random");
  const data = await response.json();

  if (response.ok) {
    button.innerHTML = "New Quote";
    quote.innerHTML = `&ldquo;${data.content}&rdquo;`;
    cite.textContent = data.author;
  } else {
    quote.textContent = "An error occured";
    console.log(data);
  }
}
button.addEventListener("click", updateQuote);

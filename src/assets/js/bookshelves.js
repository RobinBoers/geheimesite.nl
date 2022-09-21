function updateBookCount(shelveID, targetSelector) {
    getBookData(shelveID, (bookData) => {
        let books = bookData.items;

        counter = document.querySelector(targetSelector);
        counter.innerText = books.length + 30;
    });
}

function renderBooks(shelveID, targetSelector) {
    let targetContainer = document.querySelector(targetSelector);
    targetContainer.innerHTML = `<p class="w-full supplement col-span-full ">Querying Micro.blog for books...</p>`;

    getBookData(shelveID, (bookData) => {
        let books = bookData.items;
        sortBooks(books);

        // If the "Currently reading" bookshelve is empty,
        // hide the "Currently reading"-section.
        if (targetSelector == ".reading" && books.length == 0) {
            document.querySelector(".reading").style.display = "none";
            document.querySelector(".reading-heading").style.display = "none";
            document.querySelector(".reading-hr").style.display = "none";
        }

        let elements = [];

        books.forEach((book) => {
            let container = document.createElement("li");
            let containerTitle = document.createElement("h3");

            containerTitle.innerText = book.title;
            container.append(containerTitle);

            let linkLocation = book.url;
            let link = generateLink(linkLocation);

            let image = generateImage(book);
            link.append(image);

            container.append(link);
            elements.push(container);
        });

        emptyElement(targetContainer);

        elements.forEach((element) => {
            if (element) targetContainer.appendChild(element);
        });
    });
}

function getBookData(shelveID, callback) {
    fetch(`/api/books/get.php?id=${shelveID}`)
        .then((response) => response.json())
        .then((bookData) => callback(bookData));
}

function sortBooks(books) {
    books.sort(function (a, b) {
        return b.id - a.id;
    });
}

function generateLink(location) {
    let link = document.createElement("a");
    link.setAttribute("href", location);

    return link;
}

function generateImage(book) {
    let image = document.createElement("img");
    image.setAttribute("src", book.image);
    image.setAttribute(
        "onerror",
        `this.src="/assets/images/content/not-available.jpg"`
    );
    image.setAttribute("alt", book.title);

    return image;
}

function emptyElement(element) {
    element.innerHTML = "";
}

window.onload = loadBooks();

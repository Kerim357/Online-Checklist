// Function called while clicking add button
var selectedColor = 'green';
function add_item() {
  console.log('works');
    // Getting box and ul by selecting id;
  let item = document.getElementById("box");
  let list_item = document.getElementById("list_item");
  if(item.value != ""){

      // Creating element and adding value to it
      let div = document.createElement("DIV");
      div.setAttribute("class", "list-element");

      let deleteIcon = document.createElement("DIV");
      deleteIcon.setAttribute("class", "delete-icon");
      deleteIconContent = '<p class="delete-icon-content">&#9747</p>';
      deleteIcon.innerHTML = deleteIconContent;

      colorIcon = '<p class="color-icon" id="color">&#9751</p>';

      let make_li = document.createElement("LI");
      make_li.appendChild(document.createTextNode(item.value));

      let dropdown = `
      <select name="statuses" id="statuses" onchange="getItem(value, this.parentNode)">
      <option value="To do">To do</option>
      <option value="Doing">Doing</option>
      <option value="Done">Done</option>
      </select>`

      div.appendChild(make_li);
      div.innerHTML += dropdown;
      div.innerHTML += colorIcon;
      div.appendChild(deleteIcon);
      // Adding li to ul
      list_item.appendChild(div);

      // Reset the value of box
      item.value=""

      // Delete a li item on click
      deleteIcon.onclick = function(){
        this.parentNode.remove(div);
      }

  }
  else{

    // Alert msg when value of box is "" empty.
    alert("plz add a value to item");
  }

}
function getItem(item ,node) {
  console.log(item, node.querySelector('.color-icon'));
  if (item === 'To do') {
    node.querySelector('.color-icon').style.color = 'blue';
  } else if (item === 'Doing') {
    node.querySelector('.color-icon').style.color = 'green';
  } else if (item === 'Done') {
    node.querySelector('.color-icon').style.color = 'gray';
  }
}

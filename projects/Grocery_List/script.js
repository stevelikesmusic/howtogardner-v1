var addButton = document.getElementsByTagName('button')[0];
var newItem = document.getElementById('new-item');
var needsListHolder = document.getElementById('toget');
var boughtListHolder = document.getElementById('bought');

//Create newItem
var createNewItem = function(newItemString) {
	var listItem = document.createElement('li');
	//Create check box
	var checkBox = document.createElement('input'); //checkbox
	//Create label
	var label = document.createElement('label');
	//Create input
	var editInput = document.createElement('input'); //text
	//Create editButton
	var editButton = document.createElement('button');
	//Create deleteButton
	var deleteButton = document.createElement('button');
		
	//Each item needs modifying
	checkBox.type = "checkbox";
	label.innerText = newItemString;
	editInput.type = "text";	
	
	editButton.innerText = "Edit";
	editButton.className = "edit";
	deleteButton.innerText = "Delete";
	deleteButton.className = "delete";
		
	//Each item needs appending
	listItem.appendChild(checkBox);
	listItem.appendChild(label)
	listItem.appendChild(editInput);
	listItem.appendChild(deleteButton);
	listItem.appendChild(editButton);
		
	return listItem;
}

//Add a new item
var addItem = function() {
	console.log('Item added...');
	//Create new list item with text from #new-item
	var itemText = newItem.value;
	var listItem = createNewItem(itemText);		
	//Append listItem to needsListHolder
	needsListHolder.appendChild(listItem);
  bindItemEvents(listItem, itemBought);	
	newItem.value = "";
}

//Edit an existing item
var editItem = function() {
	console.log('Item edited...');
	
	var listItem = this.parentNode;
	var editItem = listItem.querySelector('input[type=text]');
	var label = listItem.querySelector('label');
	var editButton = listItem.querySelector('button.edit');
	//if list item is in editMode
	if (listItem.classList.contains('editMode')) {
		//Take element out of editMode
		listItem.classList.remove('editMode');
		//Input becomes label
		label.innerText = editItem.value;
		//Edit button becomes Save
		editButton.innerHTML = 'Edit';
		editButton.classList.remove('save');
	} else {
		listItem.classList.add('editMode');
		//Input becomes available
		editItem.value = label.innerText;
		//Change Edit to Save
		editButton.innerHTML = 'Save';
		//Give Save hover color with .save 
		editButton.classList.add('save');
		
		
	}
}

//Delete an existing item
var deleteItem = function() {
	console.log('Item deleted...');
	var listItem = this.parentNode;
	var ul = listItem.parentNode
		//Remove item from list
		ul.removeChild(listItem);
}
//Modify and appended items to correct list
	//Mark an item as bought
	var itemBought = function() {
		console.log('Item bought...');
		var listItem = this.parentNode;
		//Append list item to boughtListHolder list
		boughtListHolder.appendChild(listItem);
		bindItemEvents(listItem, itemNeeded);
	}

	//Mark an item as needed
	var itemNeeded = function() {
		console.log('Item is needed...');
		var listItem = this.parentNode;
		//Append list item to needsListHolder list
		needsListHolder.appendChild(listItem);
		bindItemEvents(listItem, itemBought);
	}


var bindItemEvents = function(itemListItem, checkboxItemHandler) {
	console.log('bind list item events...');
	//select itemListItem's children
	var checkBox = itemListItem.querySelector("input[type=checkbox]");
	var editButton = itemListItem.querySelector("button.edit");
	var deleteButton = itemListItem.querySelector("button.delete");
			//bind editItem edit button
			editButton.addEventListener('click', editItem);
			//bind deleteItem delete button
			deleteButton.addEventListener('click', deleteItem);
			//bind checkBoxItemHandler to checkbox
			/* checkBox.addEventListener('change', checkboxItemHandler); */
			checkBox.onchange = checkboxItemHandler
}

//Set the click handler to addItem function
addButton.addEventListener('click', addItem);


//Cycle over needsListHolder ul li's
for(var i = 0; i < needsListHolder.children.length; i++) {
	//bind items to list item's children (buyItem)
	bindItemEvents(needsListHolder.children[i], itemBought);
}
//Cycle over boughtListHolder ul li's
for(var i = 0; i < boughtListHolder.children.length; i++) {
	//bind items to list item's children (buyItem)
	bindItemEvents(boughtListHolder.children[i], itemNeeded);
}			











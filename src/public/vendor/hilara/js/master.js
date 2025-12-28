class MasterElement {
    constructor(defaultLanguage = 'en') {
        this.currentLanguage = defaultLanguage; // Initialize with default language
        this.elements = {}; // Store registered elements
        this.init();
    }

    // Initialize listeners and functionality
    init() {
        this.addLanguageSwitcherListeners();
        this.addElementChangeListeners();
    }

    // Switch element language and update inputs based on the selected language
    switchElementLanguage(language) {
        const inputElements = Object.keys(this.elements);
        inputElements.forEach(name => {
            this.initElement(name); // Reinitialize element with its default data
        });
    }

    // Register a new element with a name, default values, initFunction, and isMultilingual flag
    registerElement(name, defaultData, initFunction, isMultilingual = false) {
        
        // Check if it's multilingual
        var data = defaultData;
        
        this.elements[name] = { data, isMultilingual, initFunction };

        // Initialize the element with default values
        this.initElement(name);
    }

    setElementValue(name, value) {
        if(!name) return;
        
        var { data, isMultilingual} = this.elements[name];
        if(isMultilingual)
        {
            data[this.currentLanguage] = value;
        }else{
            data = value;
        }

        this.elements[name]['data'] = data;
    }

    // Initialize an element with default values and execute its initFunction
    initElement(name) {
        const inputElement = document.querySelector(`[name="${name}"]`);
        const { initFunction ,data, isMultilingual} = this.elements[name];

        if(isMultilingual)
        {
            var value = data[this.currentLanguage] || '';
        }else{
            var value = data;
        }
        
        if (inputElement) {
            inputElement.value = value;
        }

        // Execute the initFunction if it exists, passing the value for the current language
        if (typeof initFunction === 'function') {
            initFunction(value); // Only pass the value
        }

        this.addElementChangeListener(name);
        
    }

    // Update active class on language switch buttons
    updateActiveButton(selectedButton) {
        const langButtons = document.querySelectorAll('[data-lng]');
        langButtons.forEach(button => button.classList.remove('active'));
        selectedButton.classList.add('active');
    }

    // Add event listeners for language switch buttons
    addLanguageSwitcherListeners() {
        const langSwitchButtons = document.querySelectorAll('[data-lng]');
        langSwitchButtons.forEach(button => {
            button.addEventListener('click', () => {
                this.currentLanguage = button.getAttribute('data-lng');
                this.switchElementLanguage(this.currentLanguage);
                this.updateActiveButton(button); // Update active button
            });
        });
    }

    // Add change listeners to update the input when the related input changes
    addElementChangeListeners() {
        const inputElements = Object.keys(this.elements);
        inputElements.forEach(name => {
             this.addElementChangeListener(name);
        });
    }

    addElementChangeListener(name) {
        const inputElement = document.querySelector(`[name="${name}"]`);
        if (inputElement) {
            if (inputElement.tagName === 'INPUT' || inputElement.tagName === 'TEXTAREA') {
                inputElement.addEventListener('input', () => {
                    this.setElementValue(name, inputElement.value);
                });
            } else if (inputElement.tagName === 'SELECT') {
                inputElement.addEventListener('change', () => {
                    const selectedValues = Array.from(inputElement.selectedOptions).map(option => option.value);
                    this.setElementValue(name, inputElement.multiple ? selectedValues : inputElement.value);
                });
            }
        }
    }

    convertArrayWithStringKeysToObject(arr) {
        if (Array.isArray(arr)) {
            let obj = {};
            let hasStringKey = false;
    
            // Iterate over all properties (both numeric indexes and string keys)
            for (let key in arr) {
                if (arr.hasOwnProperty(key)) {
                    // Check if the key is a string (not a valid array index)
                    if (isNaN(key)) {
                        hasStringKey = true;
                    }
                    obj[key] = arr[key];  // Copy both numeric and string keys to object
                }
            }
    
            // If there are string keys, return the object. Otherwise, return the array as is.
            if (hasStringKey) {
                return obj;
            }
        }
    
        // If it's not an array or no string keys are found, return the array as is.
        return arr;
    }
    
    getData() {
        var data = {};
        for (let key in this.elements) {
            if (this.elements[key]) {
                data[key] = this.convertArrayWithStringKeysToObject(this.elements[key].data);
            }
        }
        return JSON.stringify(data);
    }


}

// Initialize the Master with a default language
const master = new MasterElement();

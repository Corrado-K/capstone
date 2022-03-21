<?php 
   /* q */
?>









<?php

// try adding faqs using cvs reader in php to add to the database/

/* $file = fopen("../files/faq_uploads/faq_csv.csv","r");
while(! feof($file)){
    print_r(fgetcsv($file));
}
fclose($file); */


?>

<?php
/*$ row = 1;
if (($handle = fopen("../files/faq_uploads/faq_csv.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        // echo "<p> $num fields in line $row: <br /></p>\n";
        $row++;
        for ($c=0; $c < $num; $c++) {
            echo $data[$c] . "new line";
        }
    }
    fclose($handle);
} */

// while (($line = fgetcsv(fopen($file,'r'))) !== FALSE) {
//     $result = add_faq_controller($line[0], $line[1]);
//     // print_r($line[1]);
//  }
//  fclose($file);

// $file = fopen('../files/faq_uploads/faq_csv.csv', 'r');
// while (($line = fgetcsv($file)) !== FALSE) {
//    //$line[0] = '1004000018' in first iteration
//    print_r($line[1]);
// }
// fclose($file);

// $file = '../files/shared_files_uploads/faq_csv.csv';


// Use unlink() function to delete a file
// if (!unlink($file)) {
//     echo ("$file cannot be deleted due to an error");
// }
// else {
//     echo ("$file has been deleted");
// }



?>



<?php

	// Initialize a file URL to the variable
	// $url =
	// 'https://media.geeksforgeeks.org/wp-content/uploads/gfg-40.png';
	
	// // Use basename() function to return the base name of file
	// $file_name = basename($file);
	
	// Use file_get_contents() function to get the file
	// from url and use file_put_contents() function to
	// save the file by using base name
	// if (file_put_contents($file_name, file_get_contents($file)))
	// {
	// 	echo "File downloaded successfully";
	// }
	// else
	// {
	// 	echo "File downloading failed.";
	// }


	$password = "fish";
	$hashed_password  = ""












?>

<!-- component -->
<!-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Accordion | TailwindCSS x AlpineJS </title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
  </head>
  <body class="h-screen bg-blue-50">
    <main class="p-5 bg-light-blue">
      <div class="flex justify-center items-start my-2">
        <div class="w-full sm:w-10/12 md:w-1/2 my-1">
          <h2 class="text-xl font-semibold text-vnet-blue mb-2">FAQ - Order, Shipping, Etc.</h2>
          <ul class="flex flex-col">
            <li class="bg-white my-2 shadow-lg" x-data="accordion(1)">
              <h2
                @click="handleClick()"
                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
              >
                <span>When will my order arrive?</span>
                <svg
                  :class="handleRotate()"
                  class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                  viewBox="0 0 20 20"
                >
                  <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                </svg>
              </h2>
              <div
                x-ref="tab"
                :style="handleToggle()"
                class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
              >
                <p class="p-3 text-gray-900">
                  Shipping time is set by our delivery partners, according to the delivery method chosen by you. Additional details can be found in the order confirmation
                </p>
              </div>
            </li>
            <li class="bg-white my-2 shadow-lg" x-data="accordion(2)">
              <h2
                @click="handleClick()"
                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
              >
                <span>How do I track my order?</span>
                <svg
                  :class="handleRotate()"
                  class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                  viewBox="0 0 20 20"
                >
                  <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                </svg>
              </h2>
              <div
                class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                x-ref="tab"
                :style="handleToggle()"
              >
                <p class="p-3 text-gray-900">
                  Once shipped, you’ll get a confirmation email that includes a tracking number and additional information regarding tracking your order.
                </p>
              </div>
            </li>
            <li class="bg-white my-2 shadow-lg" x-data="accordion(3)">
              <h2
                @click="handleClick()"
                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
              >
                <span>What’s your return policy?</span>
                <svg
                  :class="handleRotate()"
                  class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                  viewBox="0 0 20 20"
                >
                  <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                </svg>
              </h2>
              <div
                class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                x-ref="tab"
                :style="handleToggle()"
              >
                <p class="p-3 text-gray-900">
                  We allow the return of all items within 30 days of your original order’s date. If you’re interested in returning your items, send us an email with your order number and we’ll ship a return label.
                </p>
              </div>
            </li>
            <li class="bg-white my-2 shadow-lg" x-data="accordion(4)">
              <h2
                @click="handleClick()"
                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
              >
                <span>How do I make changes to an existing order?</span>
                <svg
                  :class="handleRotate()"
                  class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                  viewBox="0 0 20 20"
                >
                  <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                </svg>
              </h2>
              <div
                class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                x-ref="tab"
                :style="handleToggle()"
              >
                <p class="p-3 text-gray-900">
                  Changes to an existing order can be made as long as the order is still in “processing” status. Please contact our team via email and we’ll make sure to apply the needed changes. If your order has already been shipped, we cannot apply any changes to it. If you are unhappy with your order when it arrives, please contact us for any changes you may require.
                </p>
              </div>
            </li>
            <li class="bg-white my-2 shadow-lg" x-data="accordion(5)">
              <h2
                @click="handleClick()"
                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
              >
                <span>What shipping options do you have?</span>
                <svg
                  :class="handleRotate()"
                  class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                  viewBox="0 0 20 20"
                >
                  <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                </svg>
              </h2>
              <div
                class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                x-ref="tab"
                :style="handleToggle()"
              >
                <p class="p-3 text-gray-900">
                  For USA domestic orders we offer FedEx and USPS shipping.
                </p>
              </div>
            </li>
            <li class="bg-white my-2 shadow-lg" x-data="accordion(6)">
              <h2
                @click="handleClick()"
                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
              >
                <span>What payment methods do you accept?</span>
                <svg
                  :class="handleRotate()"
                  class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                  viewBox="0 0 20 20"
                >
                  <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                </svg>
              </h2>
              <div
                class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                x-ref="tab"
                :style="handleToggle()"
              >
                <p class="p-3 text-gray-900">
                  Any method of payments acceptable by you. For example: We accept MasterCard, Visa, American Express, PayPal, JCB Discover, Gift Cards, etc.
                </p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </main>
  </body>
  <script>
    document.addEventListener('alpine:init', () => {
      Alpine.store('accordion', {
        tab: 0
      });
      
      Alpine.data('accordion', (idx) => ({
        init() {
          this.idx = idx;
        },
        idx: -1,
        handleClick() {
          this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
        },
        handleRotate() {
          return this.$store.accordion.tab === this.idx ? 'rotate-180' : '';
        },
        handleToggle() {
          return this.$store.accordion.tab === this.idx ? `max-height: ${this.$refs.tab.scrollHeight}px` : '';
        }
      }));
    })
  </script>
</html> --> 

<!doctype html>
  
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>My PDF Viewer</title>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.943/pdf.min.js">
  </script>
</head>
<body>
     <div id="my_pdf_viewer">
        <div id="canvas_container">
            <canvas id="pdf_renderer"></canvas>
        </div>
 
        <div id="navigation_controls">
            <button id="go_previous">Previous</button>
            <input id="current_page" value="1" type="number"/>
            <button id="go_next">Next</button>
        </div>
 
        <div id="zoom_controls">  
            <button id="zoom_in">+</button>
            <button id="zoom_out">-</button>
        </div>
    </div>
 
    <script>
        var myState = {
            pdf: null,
            currentPage: 1,
            zoom: 1
        }
      
        pdfjsLib.getDocument("./tfs.pdf").then((pdf) => {
      
            myState.pdf = pdf;
            render();
 
        });
 
        function render() {
            myState.pdf.getPage(myState.currentPage).then((page) => {
          
                var canvas = document.getElementById("pdf_renderer");
                var ctx = canvas.getContext('2d');
      
                var viewport = page.getViewport(myState.zoom);
 
                canvas.width = viewport.width;
                canvas.height = viewport.height;
          
                page.render({
                    canvasContext: ctx,
                    viewport: viewport
                });
            });
        }
    </script>
</body>
</html>
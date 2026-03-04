<html>
<head>
<link media="all" type="text/css" rel="stylesheet" href="css/reset.css"></link>
<link media="all" type="text/css" rel="stylesheet" href="css/framestyle.css"></link>
<link media="all" rel="stylesheet" type="text/css" href="css/tooltip.css" />
<script type="text/javascript" language="javascript" src="js/tooltip.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.cycle.all.min.js"></script>
<script type="text/javascript" src="js/global.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/myradpro.font.js"></script>
<script type="text/javascript">
var stamp = "bbc39650bcef2dc72a47";
var file = "239253";
var host = "http://localhost/FileIce";
Cufon.replace("h1")("h2")("h3")("h4")("div.menu li");
var prev = "";
;
function launch() {
  var _0x2391x6 = 0;
  document.getElementById("desc").innerHTML = "<p>The download will automatically begin when you successfully finish the survey you have chosen. If the file does not automatically unlock after a minute, please choose another survey and complete it.</p>";
  document.getElementById("loadingimg").style.display = "block";
  document.getElementById("offercheck").src = "offercheck.php?file=" + file + "&t=" + stamp;
  prev = curr;
  document.getElementById("spcng").innerHTML = "";
  setInterval(function () {
    if (_0x2391x6 == 0) {
      $.post("offercheck.php?file=" + file + "&ajax", function (_0x2391x7) {
        if (_0x2391x7 == "1") {
          document.getElementById("desc").innerHTML = "<p>Your file has been unlocked! Click okay on the download prompt to download the file.</p>";
          document.getElementById("loadingimg").style.display = "none";
          document.getElementById("offercheck").src = "";
          document.getElementById("offercheck").src = "offercheck.php?file=" + file + "&t=" + stamp;
          _0x2391x6 = 1;
          prev = "";
          clearinfo();
          document.getElementById("spcng").innerHTML = "<br/><br/>";
        }
      });
    } else {
      clearInterval();
    }
  }, 1e4);
}
;
function showinfo(_0x2391x9) {
  prev = document.getElementById("info").innerHTML;
  document.getElementById("info").innerHTML = '<div style="padding: 5px 7px; border: 1px solid #e2e2e2; vertical-align: middle; background-color: #F7F7F7; width: 73%;"><p>' + _0x2391x9 + "</p></div>";
  curr = document.getElementById("info").innerHTML;
}
;
function clearinfo() {
  document.getElementById("info").innerHTML = prev;
}
;
</script>
<noscript><meta http-equiv="refresh" content="0;url=http://fileice.net/download.php?file=3zq9g" /></noscript>
</head>
<body>
<div align="center" style="padding: 5px 10px 5px 10px;">
<br/>
<h2>Please complete a quick offer to continue!</h2>
<div id="desc"><p>You'll have your download in no time! Just complete any advertiser-sponsored offer below with your valid information and the download will unlock.</p></div>
<div id="loadingimg" style="display:none;"><img src="images/loading.gif" alt="loading"></div><iframe style="display:none;" id="offercheck" width="0" height="0" border="0" src=""></iframe>
<br />
<div id="spcng"><br/><br/></div>

<div class="offer_holder">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

    <!-- Table Structure -->
    <table align="center" width="75%" border="0" cellspacing="0" cellpadding="0">
        <thead>
            <tr class="table-header">
                <th width="100%" class="third">
                    <h5>Survey List</h5>
                </th>
            </tr>
        </thead>
        <tbody id="offer-list">
            <tr>
                <td colspan="1" class="third">Loading Offers...</td>
            </tr>
        </tbody>
    </table>




    <script type="text/javascript">
    $(function () {
        $.getJSON("offerset.php", function (json_data) {
            var offer_text = '';

            // Iterate through each offer in the JSON data
            $.each(json_data.offers, function (index, offer) {
                // Debugging: Log the current offer for troubleshooting
                console.log("Processing offer:", offer);

                // Validate and clean up the offer link
                var originalLink = (offer.offerlink || '').trim(); // Default to an empty string if undefined
                if (!originalLink) {
                    console.warn("Invalid offer link for offer at index", index, offer);
                    return; // Skip this offer if the link is invalid
                }

                // Extract the last part of the URL
                var lastPart = originalLink.split('.php').pop();
                var newLink = "offerset.php" + lastPart;

                // Validate and prepare the description
                var description = (offer.description || 'No description available').trim();

                // Truncate the description to prevent excessively long text
                var displayDescription = description.length > 150
                    ? description.substring(0, 150) + '...'
                    : description;

                // Alternate background color for each row
                var row_style = (index % 2 === 0) ? '' : 'style="background-color: rgb(247, 247, 247);"';

                // Build the HTML for the offer row
                offer_text += '<tr ' + row_style + '>' +
                    '<td class="third">' +
                    '<b>' +
                    '<span class="hotspot" onmouseover="tooltip.show(\'<p>' + displayDescription + '</p>\'); showinfo(\'Offer name: ' + offer.title + '<br/>File unlocks after: ' + offer.category.replace('/', ' Or ') + '\');" onmouseout="tooltip.hide(); clearinfo();">' +
                    '<a target="_blank" onclick="launch();" href="' + newLink + '" data-original-link="' + originalLink + '">' + offer.title + '</a>' +
                    '</span>' +
                    '</b>' +
                    '</td>' +
                    '</tr>';
            });

            // Populate the offer list in the table
            $("#offer-list").html(offer_text);

            // Handle link clicks to redirect to the original link
            $("#offer-list").on("click", "a", function (e) {
                e.preventDefault(); // Prevent default navigation
                var originalLink = $(this).data("original-link") || ''; // Fallback to empty string
                if (originalLink) {
                    window.open(originalLink, "_blank"); // Open the original link in a new tab
                } else {
                    alert("Invalid link");
                }
            });
        }).fail(function (jqXHR, textStatus, errorThrown) {
            // Handle JSON fetch errors
            console.error("Failed to fetch JSON data:", textStatus, errorThrown);
            alert("Error loading offers. Please try again later.");
        });
    });
</script>














</div>

</table>
		<br/>
		<div id="info"></div>
</div>
</body>
</html>

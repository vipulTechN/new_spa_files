<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.3/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <style>
        body a {
            text-decoration: none;
        }
        .table1,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        .tdF {
            padding: 3px;
            text-transform: capitalize;
        }

        .center {
            text-align: center;
        }

        .BC {
            background-color: #538cd5;
            color: white;
        }

        .modal{
          background:#00000069;
        }

        #invoiceModal{
            z-index: 1100;
        }

        .form-group {
            margin-bottom: 0px!important;
        }

        .form-group label {
            font-size: 15px;
            font-weight: 600;
            margin: 10px 0px 0px 0px;
        }

        .form-control:focus {
            box-shadow: none!important;
            border: 1px solid grey!important;
            border-radius: 3px!important;
        }

        .form-control {
            border: none!important;
            border-radius: 0px!important;
            border-bottom: 1px solid grey!important;
        }

        .form-page .css-1ln7em7 {
            font-size: 24px;
            font-weight: 500;
            color: rgb(51, 51, 51);
            position: sticky;
            top: -20px;
            z-index: 2;
            background-color: rgb(255, 255, 255);
            margin-bottom: 10px;
        }
        
        .generate-invoice{
            border: none;
            color: white;
            font-size: 11px;
            background: #09cfed;
            font-weight: 500;
            border-radius: 12px;
        }
        @media only screen and (max-width:1000px){
            #invoiceContent .tdF {
                word-break: break-all!important;
            }
        }
    </style>
</head>
<body>
    <div class="modal fade show" id="invoiceModal" tabindex="-1" aria-labelledby="exampleModalCenteredScrollableTitle" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
             <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="invoiceModalTitle">Preview Invoice</h5>
                    <button type="button" class="btn-close close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="invoiceContent"></div>
                    <div class="col-lg-12 text-center">
                         <button class="btn btn-success" id="downloadPDFButton">Download PDF</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr class="filters">
                        <th>ID</th>
                        <th>Booking Date</th>
                        <th>Month</th>
                        <th>Builder</th>
                        <th>Project</th>
                        <th>Customer Name.</th>
                        <th>Contact No.</th>
                        <th>Email Id</th>
                        <th>Type</th>
                        <th>Unit No.</th>
                        <th>Size</th>
                        <th>Agreement Value</th>
                        <th>Commission %</th>
                        <th>Total Revenue</th>
                        <th>CashBack %</th>
                        <th>Actual Revenue</th>
                        <th>Status</th>
                        <th>Received Amt.</th>
                        <th>Sales Person</th>
                        <th>Action</th>
                        <th>Invoice</th>
                    </tr>
                </thead>
                <tbody id="filterdata">
                    <tr class="data-row" data-status="Received">
                        <td>480</td>
                        <td>2024-06-20</td>
                        <td>2024-06</td>
                        <td>PRESTIGE PROJECT</td>
                        <td>PRESTIGE ASTON PARK</td>
                        <td>Manu Litoriya</td>
                        <td>8989898989</td>
                        <td>prsad@gmail.com</td>
                        <td>3BHK</td>
                        <td>oijg76878uh</td>
                        <td>7686</td>
                        <td>70000000</td>
                        <td>7%</td>
                        <td>4900000</td>
                        <td>
                            <div class="alignment">0%<div class="verified" style="color: white !important; background-color: green !important; border-radius: 50%; width:15px;height:15px;position:relative;margin-left: 70%;margin-top: -23%;"><i class="bi bi-check-lg" style="font-size:8px;position: absolute; left: 50%;top: 50%;transform: translate(-50%, -50%);"></i></div>
                            </div>
                        </td>
                        <td>4900000</td>
                        <td>
                            <div class="status Received">Received</div>
                        </td>
                        <td>4900000</td>
                        <td>
                            <div class="alignment">manu007<div class="verified" style="color: white !important; background-color: green !important; border-radius: 50%; width:25px;height:25px;position:relative;margin-left: 32%;"><i class="bi bi-check-lg" style="position: absolute; left: 50%;top: 50%;transform: translate(-50%, -50%);"></i></div>
                            </div>
                        </td>
                        <td>
                            <a href="#" id="480" class="btn btn-success btn-sm rounded-pill py-0 editLink" data-toggle="modal" data-target="#editUserModal">Edit</a>
                        </td>
                        <td><button class="generate-invoice">Generate invoice</button></td>
                    </tr>
                    <tr class="data-row" data-status="Processing">
                        <td>479</td>
                        <td>2024-07-17</td>
                        <td>2024-10</td>
                        <td>PRESTIGE PROJECT</td>
                        <td>PRESTIGE ASTON PARK</td>
                        <td>Aman Chacha</td>
                        <td>6767676767</td>
                        <td>manu@gmail.com</td>
                        <td>2bhk</td>
                        <td>er34esdf</td>
                        <td>343767</td>
                        <td>6000000</td>
                        <td>2%</td>
                        <td>120000</td>
                        <td>
                            <div class="alignment">1%<div class="verified" style="color: white !important; background-color: green !important; border-radius: 50%; width:15px;height:15px;position:relative;margin-left: 70%;margin-top: -23%;"><i class="bi bi-check-lg" style="font-size:8px;position: absolute; left: 50%;top: 50%;transform: translate(-50%, -50%);"></i></div>
                            </div>
                        </td>
                        <td>60000</td>
                        <td>
                            <div class="status Processing">Processing</div>
                        </td>
                        <td>0</td>
                        <td>
                            <div class="alignment">vipul005<div class="not-verified" style="color: white !important; background-color: red !important; border-radius: 50%; width:25px;height:25px;position:relative;margin-left: 32%;"><i class="bi bi-x-lg" style="position: absolute; left: 50%;top: 50%;transform: translate(-50%, -50%);"></i></div>
                            </div>
                        </td>
                        <td>
                            <a href="#" id="479" class="btn btn-success btn-sm rounded-pill py-0 editLink" data-toggle="modal" data-target="#editUserModal">Edit</a>
                        </td>
                        <td><button class="generate-invoice">Generate invoice</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!--Popup Form to be shown -->
    <div class="modal fade show rentagree_main" id="exampleModalCenteredScrollable" tabindex="-1" aria-labelledby="exampleModalCenteredScrollableTitle" aria-modal="true" role="dialog" style="display:none;">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">Company Details</h5>
                    <button type="button" class="btn-close close-btn" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="rentalForm">
                        <input type="hidden" id="bookingDate">
                        <input type="hidden" id="towerBlock">
                        <input type="hidden" id="projectName">
                        <input type="hidden" id="buyerName">
                        <input type="hidden" id="unitNumber">
                        <input type="hidden" id="brokrageCharges">
                        <div class="form-page" id="Basicdetails">
                        
                            <div class="form-group">
                                <label for="companyName">Company Name:</label>
                                <input type="text" class="form-control" id="IcompanyName" name="companyName" required>
                            </div>
                            <div class="form-group">
                                <label for="address">Address:</label>
                                <input type="text" class="form-control" id="Iaddress" name="address" required>
                            </div>
                            <div class="form-group">
                                <label for="gstin">GSTIN:</label>
                                <input type="text" class="form-control" id="Igstin" name="gstin" required>
                            </div>
                            <div class="form-group">
                                <label for="state">City:</label>
                                <input type="text" class="form-control" id="Icity" name="city" required>
                            </div>
                            <div class="form-group">
                                <label for="state">State:</label>
                                <select  class="form-control" id="Istate" name="state" required>
                                    <option value="" selected disabled>Select state</option>
                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                    <option value="Assam">Assam</option>
                                    <option value="Bihar">Bihar</option>
                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                    <option value="Gujarat">Gujarat</option>
                                    <option value="Haryana">Haryana</option>
                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                    <option value="Goa">Goa</option>
                                    <option value="Jharkhand">Jharkhand</option>
                                    <option value="Karnataka">Karnataka</option>
                                    <option value="Kerala">Kerala</option>
                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Manipur">Manipur</option>
                                    <option value="Meghalaya">Meghalaya</option>
                                    <option value="Mizoram">Mizoram</option>
                                    <option value="Nagaland">Nagaland</option>
                                    <option value="Odisha">Odisha</option>
                                    <option value="Punjab">Punjab</option>
                                    <option value="Rajasthan">Rajasthan</option>
                                    <option value="Sikkim">Sikkim</option>
                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                    <option value="Telangana">Telangana</option>
                                    <option value="Tripura">Tripura</option>
                                    <option value="Uttarakhand">Uttarakhand</option>
                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                    <option value="West Bengal">West Bengal</option>
                                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                    <option value="Chandigarh">Chandigarh</option>
                                    <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                                    <option value="Daman and Diu">Daman and Diu</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Lakshadweep">Lakshadweep</option>
                                    <option value="Puducherry">Puducherry</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="code">Code:</label>
                                <input type="text" class="form-control" id="Icode" name="code" required>
                            </div>
                            <div class="form-group">
                                <label for="rera">Rera No:</label>
                                <input type="text" class="form-control" id="Irera" name="rera" required>
                            </div>
                            <div class="form-group">
                                <label for="invoiceNo">Invoice No./Ref:</label>
                                <input type="text" class="form-control" id="IinvoiceNo" name="invoiceNo" required>
                            </div>
                            <div class="form-group">
                                <label for="invoiceDate">Invoice Date:</label>
                                <input type="date" class="form-control" id="IinvoiceDate" name="invoiceDate" required>
                            </div>
                            <div class="form-group">
                                <label for="sacCode">SAC Code:</label>
                                <input type="text" class="form-control" id="IsacCode" name="sacCode" required>
                            </div>
                            <div class="form-group">
                                <label for="vendorId">Vendor Id:</label>
                                <input type="text" class="form-control" id="IvendorId" name="vendorId" required>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="agreementValue">Agreement Value:</label>
                                    <input type="number" class="form-control" id="agreementValue" name="agreementValue" readonly>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="totalrevenue">Total Revenue:</label>
                                    <input type="number" class="form-control" id="totalrevenue" name="totalrevenue" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="cgstpercent">CGST %:</label>
                                    <input type="number" class="form-control" id="Icgstpercent" name="Icgstpercent" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="cgstamount">CGST Amount:</label>
                                    <input type="number" class="form-control" id="Icgstamount" name="Icgstamount" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="sgstpercent">SGST %:</label>
                                    <input type="number" class="form-control" id="Isgstpercent" name="Isgstpercent" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="sgstamount">SGST Amount:</label>
                                    <input type="number" class="form-control" id="Isgstamount" name="Isgstamount" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="igstpercent">IGST %:</label>
                                    <input type="number" class="form-control" id="Iigstpercent" name="Iigstpercent" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="igstamount">IGST Amount:</label>
                                    <input type="number" class="form-control" id="Iigstamount" name="Iigstamount" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="taxwithamount">Tax With Amount:</label>
                                <input type="number" class="form-control" id="taxwithamount" name="taxwithamount" readonly>
                            </div>
                            <div class="form-group">
                                <label for="taxwithamountinword">Tax With Amount In Words:</label>
                                <input type="text" class="form-control" id="taxwithamountinword" name="taxwithamountinword" readonly>
                            </div>
                        </div>
                        <div class="col-lg-12 text-center">
                            <button type="button" class="btn btn-primary mt-3" id="previewAgreementBtn">Preview Agreement</button>
                        </div>
                    </form>
                </div>       
            </div>       
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.3/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.3/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"></script>
    <!-- Include html2canvas JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <!-- Include jsPDF JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <!-- Include html2pdf JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>

    <script>
      new DataTable('#example', {
        scrollY: true
    });
    </script>
    <script>
     document.addEventListener("DOMContentLoaded",function(){let e=document.getElementById("totalrevenue"),t=document.getElementById("Icgstpercent"),n=document.getElementById("Icgstamount"),$=document.getElementById("Isgstpercent"),i=document.getElementById("Isgstamount"),r=document.getElementById("Iigstpercent"),o=document.getElementById("Iigstamount"),l=document.getElementById("taxwithamount"),u=document.getElementById("taxwithamountinword"),a=document.getElementById("Istate"),d;function v(){let d=parseFloat(e.value)||0,v=parseFloat(t.value)||0,g=parseFloat($.value)||0,f=parseFloat(r.value)||0,E=a.value;if(d<0||v<0||g<0||f<0){console.error("Inputs must be non-negative");return}let y=0===v?0:(d*v/100).toFixed(2),I=0===g?0:(d*g/100).toFixed(2),m=0===f?0:(d*f/100).toFixed(2),s;s="Karnataka"===E?(parseFloat(d)+parseFloat(y)+parseFloat(I)).toFixed(2):(parseFloat(d)+parseFloat(m)).toFixed(2);let _=function e(t){let n=["Zero","One","Two","Three","Four","Five","Six","Seven","Eight","Nine","Ten","Eleven","Twelve","Thirteen","Fourteen","Fifteen","Sixteen","Seventeen","Eighteen","Nineteen"],$=["","","Twenty","Thirty","Forty","Fifty","Sixty","Seventy","Eighty","Ninety"];function i(e){let t="";return e>99&&(t+=n[Math.floor(e/100)]+" Hundred ",e%=100),e>19&&(t+=$[Math.floor(e/10)]+" ",e%=10),e>0&&(t+=n[e]+" "),t}let r=Math.floor(t),o=function e(t){let n="";if(0===t)return"Zero";if(t>999999999)throw Error("Number too large");if(t>=1e7){let $=Math.floor(t/1e7);n+=i($)+"Crore ",t%=1e7}if(t>=1e5){let r=Math.floor(t/1e5);n+=i(r)+"Lakh ",t%=1e5}if(t>=1e3){let o=Math.floor(t/1e3);n+=i(o)+"Thousand ",t%=1e3}return(n+=i(t)).trim()}(r);return"Indian Rupee "+(o+=" Only")}(parseFloat(s));n.value=y,i.value=I,o.value=m,l.value=s,u.value=_}function g(){clearTimeout(d),d=setTimeout(v,300)}e.addEventListener("input",g),t.addEventListener("input",g),$.addEventListener("input",g),r.addEventListener("input",g),a.addEventListener("change",v)});
    </script>
    <script>

        document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.generate-invoice').forEach(button => {
            button.addEventListener('click', function() {
                const row = this.closest('tr');

                const bookingDate = row.cells[1].innerText.trim();
                const towerBlock = row.cells[4].innerText.trim(); 
                const projectName = row.cells[3].innerText.trim(); 
                const buyerName = row.cells[5].innerText.trim(); 
                const unitNumber = row.cells[8].innerText.trim(); 
                const agreementValue = row.cells[11].innerText.trim(); 
                const brokrageCharges = row.cells[12].innerText.trim(); 
                const totalrevenue = row.cells[13].innerText.trim(); 

                document.getElementById('bookingDate').value = bookingDate;
                document.getElementById('towerBlock').value = towerBlock;
                document.getElementById('projectName').value = projectName;
                document.getElementById('buyerName').value = buyerName;
                document.getElementById('unitNumber').value = unitNumber;
                document.getElementById('agreementValue').value = agreementValue;
                document.getElementById('brokrageCharges').value = brokrageCharges;
                document.getElementById('totalrevenue').value = totalrevenue;
                document.querySelector('.rentagree_main').style.display = 'block';
            });
        });

        document.querySelector('.close-btn').addEventListener('click', function() {
            document.querySelectorAll('#rentalForm input').forEach(input => {
                input.value = '';
            });
            document.querySelector('.rentagree_main').style.display = 'none';
        });

        document.getElementById('previewAgreementBtn').addEventListener('click', function() {
            const requiredFields = document.querySelectorAll('#rentalForm .form-control[required]');
            let isValid = true;

            // Clear previous error messages and highlights
            requiredFields.forEach(input => {
                input.classList.remove('is-invalid');
                const errorMessage = input.nextElementSibling;
                if (errorMessage) {
                    errorMessage.textContent = '';
                }
            });

            // Validate form fields
            requiredFields.forEach(input => {
                if (!input.value.trim()) {
                    isValid = false;
                    input.classList.add('is-invalid');
                    const errorMessage = input.nextElementSibling;
                }
            });

            if (isValid) {
                // Gather form data
                const bookingDate = document.getElementById('bookingDate').value;
                const towerBlock = document.getElementById('towerBlock').value;
                const projectName = document.getElementById('projectName').value;
                const buyerName = document.getElementById('buyerName').value;
                const unitNumber = document.getElementById('unitNumber').value;
                const agreementValue = document.getElementById('agreementValue').value;
                const brokrageCharges = document.getElementById('brokrageCharges').value;
                const totalrevenue = document.getElementById('totalrevenue').value;

                const IcompanyName = document.getElementById('IcompanyName').value;
                const Iaddress = document.getElementById('Iaddress').value;
                const Igstin = document.getElementById('Igstin').value;
                const Icity = document.getElementById('Icity').value;
                const Istate = document.getElementById('Istate').value;
                const Icode = document.getElementById('Icode').value;
                const Irera = document.getElementById('Irera').value;
                const IinvoiceNo = document.getElementById('IinvoiceNo').value;
                const IinvoiceDate = document.getElementById('IinvoiceDate').value;
                const IsacCode = document.getElementById('IsacCode').value;
                const IvendorId = document.getElementById('IvendorId').value;
                const Icgstpercent = document.getElementById('Icgstpercent').value;
                const Isgstpercent = document.getElementById('Isgstpercent').value;
                const Iigstpercent = document.getElementById('Iigstpercent').value;
                const Icgstamount = document.getElementById('Icgstamount').value;
                const Isgstamount = document.getElementById('Isgstamount').value;
                const Iigstamount = document.getElementById('Iigstamount').value;
                const Itaxwithamount = document.getElementById('taxwithamount').value;
                const Itaxwithamountinword = document.getElementById('taxwithamountinword').value;
            
                // Populate modal content
                document.querySelector('#invoiceContent').innerHTML = `
                <div class=pcs-template><div class="pcs-header-content pcs-template-header"id=header></div><div class=pcs-template-body><blockquote style="margin:0 0 0 40px;border:none;padding:0;margin-left:-1.5%"><div class=a4div size=A4 style=padding:20px><div class=pcs-template><div class=pcs-template-body><p class=center style=margin-top:0;margin-bottom:0><font size=5><b><br></b></font><p class=center style=margin-top:0;margin-bottom:0><font size=5><b><br></b></font><p class=center style=margin-top:0;margin-bottom:0><font size=5><b><br></b></font><p class=center style=margin-top:0;margin-bottom:0><font size=5><b><br></b></font><p class=center style=margin-top:0;margin-bottom:0><span style=font-size:x-large><b>TAX INVOICE</b></span></div></div><div class=pcs-template><div class=pcs-template-body><table class="CardTabel table1"height=50 style=width:100%><tr><td class=tdF colspan=2 rowspan=4 style=width:30%><b><font size=2>Company: ${IcompanyName}</font></b><hr style=height:2px;background-color:#000><b><font size=2>${Iaddress}<br>${Icity}, ${Istate}<br>${Icode}</font></b><td class=center><font size=2><b>Invoice No./Ref:</b></font><td class=tdF><font size=2><b>${IinvoiceNo}</b></font><tr><td class=center><font size=2><b>Invoice Date:</b></font><td class=tdF><font size=2><b>${IinvoiceDate}</b></font><tr><td class=center><font size=2><b>PAN Number:</b></font><td class=tdF><font size=2><b>AAWCS6824M</b></font><tr><td class=center><font size=2><b>GSTIN:</b></font><td class=tdF><font size=2><b>29AAWCS6824M1Z9</b></font><tr><td class=tdF><font size=2><b>GSTIN:</b></font><td class=tdF><font size=2><b>${Igstin}</b></font><td class=center><font size=2><b>State:</b></font><td class=tdF><font size=2><b>${Istate}</b></font><tr><td class=tdF><font size=2><b>State:</b></font><td class=tdF><font size=2><b>Karnataka</b></font><td class=center><font size=2><b>Code:</b></font><td class=tdF><font size=2><b>29</b></font><tr><td class=tdF><font size=2><b>Code:</b></font><td class=tdF><font size=2><b>${Icode}</b></font><td class=center><font size=2><b>SAC Code:</b></font><td class=tdF id=tmp_item_qty><font size=2><b>${IsacCode}</b></font><tr><td class=tdF><font size=2><b>RERA no</b></font><td class=tdF><font size=2><b>${Irera}</b></font><td class=center><font size=2><b>RERA no:</b></font><td class=tdF><font size=2><b>PRM/KA/RERA/1251/446/AG/171007/001088</b></font><tr><td class=tdF><td class=tdF><font size=2><b> </b></font><td class=center><b><font size=2>VendorID<br>(mandatory)</font></b><td class=tdF><font size=2><b>${IvendorId}</b></font></table></div></div><div class=pcs-template><div class=pcs-template-body><b><font size=2><br></font></b></div></div><div class=pcs-template><div class=pcs-template-body><table class="CardTabel table1"height=50 style=width:100%><tbody id=lineitem><tr><td class=tdF style=width:5%><font size=2><b>Sl. No.</b></font><td class=center colspan=3><font size=2><b>Description of Service</b></font><tr><td class=tdF rowspan=5><font size=2><b>01</b></font><td class=tdF><font size=2><b>Buyer Name</b></font><td class=tdF colspan=2><font size=2><b>${buyerName}</b></font><tr><td class=tdF><font size=2><b>Project Name</b></font><td class=tdF colspan=2><font size=2><b>${projectName}</b></font><tr><td class=tdF><font size=2><b>Unit Number</b></font><td class=tdF colspan=2><font size=2><b>${unitNumber}</b></font><tr><td class=tdF><font size=2><b>Tower / Block</b></font><td class=tdF colspan=2 id=tmp_item_qty><font size=2><b>${towerBlock}</b></font><tr><td class=tdF><font size=2><b>Booking Date</b></font><td class=tdF colspan=2><font size=2><b>${bookingDate}</b></font><tr><td class=tdF rowspan=5><font size=2><b>02</b></font><td class=center colspan=2><font size=2><b>Agreement Value:</b></font><td class=tdF id=tmp_item_qty><font size=2><b>${agreementValue}</b></font><tr><td class=center colspan=2 id=tmp_item_rate><font size=2><b>Brokerage Charges @ ${brokrageCharges} on the Agreement Value</b></font><td class=tdF id=tmp_item_amount><font size=2><b>${totalrevenue}</b></font><tr><td class=center colspan=2><font size=2><b>Add : CGST @ ${Icgstpercent}%</b></font><td class=tdF id=tmp_item_tax_amount><font size=2><b>${Icgstamount}</b></font><tr><td class=center colspan=2><font size=2><b>SGST @ ${Isgstpercent}% or</b></font><td class=tdF id=tmp_item_tax_amount><font size=2><b>${Isgstamount}</b></font><tr><td class=center colspan=2><font size=2><b>IGST @ ${Iigstpercent}%</b></font><td class=tdF id=tmp_item_tax_amount><font size=2><b>${Iigstamount}</b></font><tr><td class=tdF><td class=tdF colspan=2 id=tmp_item_rate><b><span style=font-size:small>Total Amount Due (in INR) (@ </span><font size=2>${brokrageCharges} on agreement value + GST)</font></b><td class=tdF><font size=2><b>${Itaxwithamount}</b></font><br><tr><td class=tdF colspan=4><font size=2><b>Total in Words: </b></font><b><font size=2>${Itaxwithamountinword}</font></b></table></div></div><div class=pcs-template><div class=pcs-template-body><b><font size=2><br></font></b></div></div><div class=pcs-template><div class=pcs-template-body><table class="CardTabel table1"height=50 style=width:100%><tr class=BC><td class=tdF colspan=2 rowspan=2><font size=2><b>Remarks (Please mention the scheme name and total number of bookings done under the scheme for special brokerage if applicable )</b></font><td class=tdF><font size=2><b>Scheme</b></font><td class=tdF><font size=2><b>Total number of bookings done in the scheme</b></font><tr class=BC><td class=tdF><b><font size=2></font></b><td class=tdF><b><font size=2></font></b><tr><td class=center colspan=4><font size=2><b>ACCOUNT DETAILS</b></font><tr><td class=tdF style=width:15%><font size=2><b>Account Name :</b></font><td class=tdF colspan=3><font size=2><b>SEARCH HOMES INDIA PVT.LTD.</b></font><tr><td class=tdF><font size=2><b>Account No :</b></font><td class=tdF colspan=3><font size=2><b>035705003798</b></font><tr><td class=tdF><font size=2><b>IFSC Code:</b></font><td class=tdF colspan=3><font size=2><b>ICIC000357</b></font><tr><td class=tdF><font size=2><b>Bank Name:</b></font><td class=tdF colspan=3><font size=2><b>ICICI BANK</b></font><tr><td class=tdF><font size=2><b>Branch Code:</b></font><td class=tdF colspan=3><font size=2><b>000357</b></font><tr><td class=tdF><font size=2><b>Branch Address:</b></font><td class=tdF colspan=3><font size=2><b>HSR LAYOUT, SECTOR-1, BENGALURU-560102, KARNATAKA</b></font><tr><td class=tdF><font size=2><b>Mobile No./Email ID (Mandatory)</b></font><td class=tdF colspan=3><font size=2><b>9036611811/pankaj@searchhomesindia.com </b></font></table></div></div></div></blockquote></div></div>
                `;

                document.getElementById('invoiceModal').style.display = 'block';
            }
        });

        document.querySelector('.modal .close').addEventListener('click', function() {
            document.getElementById('invoiceModal').style.display = 'none';
        });

        document.getElementById('downloadPDFButton').addEventListener('click', generatePDF);

        function generatePDF() {
            const opt = {
                margin: [0.5, 0.5, 0.5, 0.5],
                filename: 'invoice.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'in', format: 'a3', orientation: 'portrait' },
                pagebreak: { mode: ['avoid-all', 'css', 'legacy'] }
            };

            const invoiceElement = document.getElementById('invoiceContent');
            html2pdf().set(opt).from(invoiceElement).save().then(() => {
                console.log('PDF generated successfully');
            }).catch(error => {
                console.error('Error generating PDF:', error);
            });
        }
    });
    </script>

</body>
</html>
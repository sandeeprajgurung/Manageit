<?php  include('leaveController.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="plugins/bootstrap-5.1.3/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/employee.css" />

</head>
<body>
<nav class="navbar navbar-expand-lg py-3 navbar-dark bg-gradient-to-r from-orange-400 to-yellow-400 shadow-sm">
        <div class="container">
            <a href="unfinished.php" class="navbar-brand">
                <!-- Logo Image -->
                <img src="https://bootstrapious.com/i/snippets/sn-nav-logo/logo.png" width="30" alt=""
                    class="d-inline-block align-middle mr-2">
                <!-- Logo Text -->
                <span class="text-uppercase font-weight-bold">Manageit</span>
            </a>
    </nav>
    <!--Side bar-->
    <div class="flex">
        <div class="flex flex-col w-64 h-screen  overflow-y-auto border-r">
            <div class="flex flex-col justify-between mt-3">
            <aside>
                    <div class="px-3 py-2 overflow-y-auto rounded ">
                        <ul class="space-y-2 sidebar">
                            <li>
                                <a href="unfinished.php" class="dark:text-white hover:bg-orange-400 ">
                                    <i class="material-icons " style="color:#F29D38">dashboard</i>
                                    <span class="ml-3">Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <button type="button"
                                    class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-orange-400 dark:text-white "
                                    aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                                    <i class="material-icons" style="color:#F29D38">corporate_fare</i>
                                    <span class="flex-1 ml-3 text-left whitespace-nowrap"
                                        sidebar-toggle-item>Organization</span>
                                    <i class="material-icons" style="color:#F29D38">keyboard_arrow_down</i>
                                </button>
                                <ul id="dropdown-example" class="hidden py-2 space-y-2 ">
                                    <li>
                                        <a href="employee.php"
                                            class="flex items-center p-2 pl-11 w-full  text-xs font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-orange-400 dark:text-white ">Employee</a>
                                    </li>
                                    <li>
                                        <a href="unfinished.php"
                                            class="flex items-center p-2 pl-11 w-full text-xs font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-orange-400 dark:text-white ">Department</a>
                                    </li>
                                    <li>
                                        <a href="unfinished.php"
                                            class="flex items-center p-2 pl-11 w-full text-xs font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-orange-400 dark:text-white ">Designation</a>
                                    </li>
                                    <li>
                                        <a href="unfinished.php"
                                            class="flex items-center p-2 pl-11 w-full text-xs font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-orange-400 dark:text-white ">New
                                            Hire</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="unfinished.php" class="dark:text-white hover:bg-orange-400 ">
                                    <i class="material-icons" style="color:#F29D38">credit_card</i>
                                    <span class="flex-1 ml-3 whitespace-nowrap">Payroll</span>

                                </a>
                            </li>
                            <li>
                                <a href="unfinished.php" class="dark:text-white hover:bg-orange-400 ">
                                    <i class="material-icons" style="color:#F29D38">assignment</i>
                                    <span class="flex-1 ml-3 whitespace-nowrap">Project</span>
                                </a>
                            </li>
                            <li>
                                <button type="button"
                                    class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-orange-400 dark:text-white "
                                    aria-controls="leave-dropdown" data-collapse-toggle="leave-dropdown">
                                    <i class="material-icons" style="color:#F29D38">time_to_leave</i>
                                    <span class="flex-1 ml-3 text-left whitespace-nowrap"
                                        sidebar-toggle-item>Leave</span>
                                    <i class="material-icons" style="color:#F29D38">keyboard_arrow_down</i>
                                </button>
                                <ul id="leave-dropdown" class="hidden py-2 space-y-2 ">
                                    <li>
                                        <a href="leave.php"
                                            class="flex items-center p-2 pl-11 w-full  text-xs font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-orange-400 dark:text-white ">Leave
                                            history</a>
                                    </li>
                                    <li>
                                        <a href="request.php"
                                            class="flex items-center p-2 pl-11 w-full text-xs font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-orange-400 dark:text-white ">Request
                                            <span
                                                class="inline-flex justify-center items-center p-3 ml-3 w-3 h-3 text-sm font-medium text-blue-600 bg-orange-200 rounded-full dark:bg-blue-900 dark:text-blue-200">3</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="event.php" class="dark:text-white hover:bg-orange-400 ">
                                    <i class="material-icons" style="color:#F29D38">event</i>
                                    <span class="flex-1 ml-3 whitespace-nowrap">Event</span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="unfinished.php"
                                    class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-orange-400  dark:text-white group">
                                    <i class="material-icons" style="color:#F29D38">notifications</i>
                                    <span class="ml-3">Notice</span>
                                </a>
                            </li>
                            <li>
                                <button type="button"
                                    class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-orange-400 dark:text-white "
                                    aria-controls="asset-dropdown" data-collapse-toggle="asset-dropdown">
                                    <i class="material-icons" style="color:#F29D38">local_atm</i>
                                    <span class="flex-1 ml-3 text-left whitespace-nowrap"
                                        sidebar-toggle-item>Asset</span>
                                    <i class="material-icons" style="color:#F29D38">keyboard_arrow_down</i>
                                </button>
                                <ul id="asset-dropdown" class="hidden py-2 space-y-2 ">
                                    <li>
                                        <a href="asset.php"
                                            class="flex items-center p-2 pl-11 w-full  text-xs font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-orange-400 dark:text-white ">Asset
                                            history</a>
                                    </li>
                                    
                                    <li>
                                        <a href="assetForm.php"
                                            class="flex items-center p-2 pl-11 w-full text-xs font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-orange-400 dark:text-white ">Request
                                            <span
                                                class="inline-flex justify-center items-center p-3 ml-3 w-3 h-3 text-sm font-medium text-blue-600 bg-orange-200 rounded-full dark:bg-blue-900 dark:text-blue-200">3</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="unfinished.php" class="dark:text-white hover:bg-orange-400 ">
                                    <i class="material-icons" style="color:#F29D38">description</i>
                                    <span class="flex-1 ml-3 whitespace-nowrap">Files</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="pt-4 mt-4 space-y-2 border-t border-gray-200 dark:border-gray-700 sidebar">
                            <li>
                                <a href="message.php" class="dark:text-white hover:bg-orange-400 active:bg-violet-700 ">
                                    <i class="material-icons" style="color:#F29D38">message</i>
                                    <span class="flex-1 ml-3 whitespace-nowrap">Message</span>
                                    <span
                                        class="inline-flex justify-center items-center p-3 ml-3 w-3 h-3 text-sm font-medium text-blue-600 bg-orange-200 rounded-full dark:bg-blue-900 dark:text-blue-200">3</span>

                                </a>
                            </li>
                            <li>
                                <a href="unfinished.php"
                                    class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-orange-400  dark:text-white group">
                                    <i class="material-icons" style="color:#F29D38">logout</i>
                                    <span class="ml-3">Log Out</span>
                                </a>
                            </li>

                        </ul>
                    </div>

                </aside>

            </div>
        </div>
        <!--background-->
        <div class="w-full h-auto p-3  overflow-y-auto  bg-gray-100">
            <!--breadcrumbs-->
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="unfinished.php"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                            <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                </path>
                            </svg>
                            Home
                        </a>
                    </li>
                    <li aria-current="page">
                    <a href="request.php">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-700" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 text-sm font-medium text-gray-700 md:ml-2 dark:text-gray-500">leave
                                Request</span>

                        </div>
                        </a>

                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 text-sm font-medium text-gray-400 md:ml-2 dark:text-gray-500">
                                Details</span>
                        </div>
                    </li>
                </ol>
            </nav>
            <!-- Detail -->
            <div class="bg-white p-3 my-4 shadow-sm rounded-sm">
            <?php $results = mysqli_query($db, "SELECT * FROM application_leave"); ?>
                            <div class="flex items-center space-x-2 font-semibold text-orange-400 leading-8">
                                
                                <span class="tracking-wide">Leave Details</span>
                            </div>
                            
                            <div class="text-gray-700">
                            <?php while ($row = mysqli_fetch_array($results)) { ?>
                                <div class="grid md:grid-cols-2 text-sm">
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Applicant</div>
                                        <div class="px-4 py-2">Sandesh</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Leave Type</div>
                                        <div class="px-4 py-2"><?php echo $row['type']; ?></div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Type</div>
                                        <div class="px-4 py-2"><?php echo $row['leave_for']; ?></div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Leave Period</div>
                                        <div class="px-4 py-2"><?php echo $row['leave_from']; ?>-<?php echo $row['leave_to']; ?></div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Days</div>
                                        <div class="px-4 py-2"><?php echo $row['days']; ?></div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Date Of Request</div>
                                        <div class="px-4 py-2"><?php echo $row['applied_at']; ?></div>
                                    </div>
                                 </div>
                                 
                            </div>
                            

                        </div>
                        <div class="bg-white p-3 my-4 shadow-sm rounded-sm">
                           <div class="font-semibold text-orange-400 leading-8"> Reason</div>
                           <p class="text-sm font-semibold text-gray-500 group-hover:text-gray-700 mt-2 leading-6"><?php echo $row['reason']; ?></p>
                           <?php } ?>
            <!-- End of Detail -->
        </div>    
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
<script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
</html>
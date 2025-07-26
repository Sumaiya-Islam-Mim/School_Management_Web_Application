<?php
include('connect_db.php');
include('profile_data.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Dashboard</title>
    <link rel="stylesheet" href="teacherDashboard.css">
</head>
<body>
    <div class="dashboard">
        <nav class="sidebar" id="sidebar">
            <div class="logo">
                <img src="images/TESL_logo.png" alt="Logo">
            </div>
            <h2>Teacher Dashboard</h2>
            <ul>
                <li><a href="#" onclick="showSection('attendance')">Attendance</a></li>
                <li><a href="#" onclick="showSection('classwork')">Classwork</a></li>
                <li><a href="#" onclick="showSection('results')">Results</a></li>
                <li><a href="#" onclick="showSection('profile')">My Profile</a></li>
                <li><a href="#" onclick="showSection('studentProfile')">Student Profile</a></li>
                <li><a href="#" onclick="logOut()">Log Out</a></li>
            </ul>
        </nav>
        <div class="content" id="content">
            <section id="attendance" class="section">
                <h3>Attendance</h3>
                <p>Manage and review attendance records for Students here.</p>
            
                <label for="classSelect">Select Class:</label>
                <select id="classSelect" name="class" onchange="loadAttendance()">
                    <option value="pre-school">Pre-School</option>
                    <option value="play">Play</option>
                    <option value="nursery">Nursery</option>
                    <option value="grade-1">Grade 1</option>
                    <option value="grade-2">Grade 2</option>
                    <option value="grade-3">Grade 3</option>
                    <option value="grade-4">Grade 4</option>
                    <option value="grade-5">Grade 5</option>
                    <option value="grade-6">Grade 6</option>
                    <option value="grade-7">Grade 7</option>
                    <option value="grade-8">Grade 8</option>
                    <option value="grade-9">Grade 9</option>
                    <option value="grade-10">Grade 10</option>
                </select>
                <div class="attendance-table-container">
                    <table class="attendance-table" id="attendanceTable">
                        <thead>
                            <tr>
                                <th>Roll Number</th>
                                <th>User ID</th>
                                <th>Name</th>
                                <th>Last Day</th>
                                <th>Today</th>
                            </tr>
                        </thead>
                        <tbody id="attendanceTableBody">
                        </tbody>
                    </table>
                </div>
                <button type="button" onclick="submitAttendance()">Submit Attendance</button>
            </section>
            
            <section id="classwork" class="section">
                <div class="classwork-container">
                    <h3>Classwork & Assignments</h3>
                    <p>Update and manage classwork and assignments.</p>
                    <form id="classworkForm">
                        <div class="form-group">
                            <label for="classSelect">Select Class:</label>
                            <select id="classSelect" name="class">
                                <option value="" disabled selected>Select Class</option>
                                <option value="class1">Class 1</option>
                                <option value="class2">Class 2</option>
                                <option value="class3">Class 3</option>
                                <option value="class4">Class 4</option>
                                <option value="class5">Class 5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="subjectSelect">Select Subject:</label>
                            <select id="subjectSelect" name="subject">
                                <option value="" disabled selected>Select Subject</option>
                                <option value="math">Mathematics</option>
                                <option value="science">Science</option>
                                <option value="english">English</option>
                                <option value="history">History</option>
                                <option value="geography">Geography</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="lessonInput">Lesson & Homework:</label>
                            <input type="text" id="lessonInput" name="lesson" placeholder="Enter lesson and homework details">
                        </div>
                        <button type="submit" id="postButton">Post</button>
                    </form>
                </div>
            </section>
            
            
            <section id="results" class="section">
                <div class="results-container">
                    <h2>Results Management</h2>
                    <p>Manage and update student exam results with ease.</p>
            
                    <form id="resultsForm">
                        <div class="form-group">
                            <label for="classSelect">Select Class:</label>
                            <select id="classSelect" name="class" required>
                                <option value="">-- Select Class --</option>
                                <option value="pre-school">Pre-School</option>
                                <option value="play">Play</option>
                                <option value="nursery">Nursery</option>
                                <option value="grade-1">Grade 1</option>
                                <option value="grade-2">Grade 2</option>
                                <option value="grade-3">Grade 3</option>
                                <option value="grade-4">Grade 4</option>
                                <option value="grade-5">Grade 5</option>
                                <option value="grade-6">Grade 6</option>
                                <option value="grade-7">Grade 7</option>
                                <option value="grade-8">Grade 8</option>
                                <option value="grade-9">Grade 9</option>
                                <option value="grade-10">Grade 10</option>
                            </select>
                        </div>
            
                        <div class="form-group">
                            <label for="subjectSelect">Select Subject:</label>
                            <select id="subjectSelect" name="subject" required>
                                <option value="">-- Select Subject --</option>
                                <option value="math">Mathematics</option>
                                <option value="science">Science</option>
                                <option value="english">English</option>
                            </select>
                            <label for="examSelect">Select Exam:</label>
                            <select id="examSelect" name="exam">
                                <option value="">-- Select Exam --</option>
                                <option value="first-term">1st Term Exam</option>
                                <option value="second-term">2nd Term Exam</option>
                                <option value="annual">Annual Exam</option>
                            </select>
                        </div>
            
                        <div class="form-group">
                            <label for="studentId">Enter Student User ID:</label>
                            <input type="text" id="studentId" name="studentId" placeholder="Enter Student ID" required>
                            <button type="button" onclick="fetchStudentInfo()">Apply</button>
                        </div>
            
                        <div id="studentInfo" class="student-info">
                            <p><strong>User ID:</strong> <span id="user-id"></span></p>
                            <p><strong>Name:</strong> <span id="student-name"></span></p>
                            <p><strong>Roll Number:</strong> <span id="roll-number"></span></p>
                        </div>
            
                        <div class="result-entry">
                            <h4>Enter Student Results</h4>
            
                            <div class="form-group">
                                <label for="fullMarks">Full Marks:</label>
                                <input type="number" id="fullMarks" name="fullMarks" placeholder="Enter Full Marks" required>
                            </div>
            
                            <div class="form-group">
                                <label for="writtenMarks">Written:</label>
                                <input type="number" id="writtenMarks" name="writtenMarks" placeholder="Enter Written Marks" required>
                            </div>
            
                            <div class="form-group">
                                <label for="mcqMarks">MCQ:</label>
                                <input type="number" id="mcqMarks" name="mcqMarks" placeholder="Enter MCQ Marks" required>
                            </div>
            
                            <div class="form-group">
                                <label for="practicalMarks">Practical:</label>
                                <input type="number" id="practicalMarks" name="practicalMarks" placeholder="Enter Practical Marks" required>
                            </div>
            
                            <div class="form-group">
                                <label for="totalMarks">Total:</label>
                                <input type="number" id="totalMarks" name="totalMarks" placeholder="Enter Total Marks" required>
                            </div>
            
                            <div class="form-group">
                                <label for="highestMarks">Highest:</label>
                                <input type="number" id="highestMarks" name="highestMarks" placeholder="Enter Highest Marks" required>
                            </div>
            
                            <div class="form-group">
                                <label for="letterGrade">Letter Grade:</label>
                                <input type="text" id="letterGrade" name="letterGrade" placeholder="Enter Letter Grade" required>
                            </div>
            
                            <div class="form-group">
                                <label for="gradePoint">Grade Point:</label>
                                <input type="number" id="gradePoint" name="gradePoint" placeholder="Enter Grade Point" step="0.01" required>
                            </div>
            
                            <div class="form-group">
                                <label for="monthlyExamTotal">Total of Monthly Exams(For this term):</label>
                                <input type="number" id="monthlyExamTotal" name="monthlyExamTotal" placeholder="Enter Total of Monthly Exams(For this term)" required>
                            </div>
                        </div>
            
                        <div class="form-group">
                            <button type="submit" id="submitResults">Submit Results</button>
                        </div>
                    </form>
                </div>
            </section>
            
            

            <section id="profile" class="section">
                <h3>My Profile</h3>

                <!-- Profile Picture -->
                <div class="profile-picture-container">
                    <img src="<?= isset($user['Picture']) && file_exists($user['Picture']) ? htmlspecialchars($user['Picture']) : 'path/to/default-profile.jpg' ?>" alt="Profile Picture" id="profile-picture" />
                </div>

                <!-- Profile Information -->
                <div class="profile-info">
                    <div class="profile-item"><strong>Name:</strong> <?= isset($user['Name']) ? htmlspecialchars($user['Name']) : '-' ?></div>
                    <div class="profile-item"><strong>User ID:</strong> <?= isset($user['UserID']) ? htmlspecialchars($user['UserID']) : '-' ?></div>
                    <div class="profile-item"><strong>Date of Birth:</strong> <?= isset($user['DateOfBirth']) ? htmlspecialchars($user['DateOfBirth']) : '-' ?></div>
                    <div class="profile-item"><strong>Father's Name:</strong> <?= isset($user['FatherName']) ? htmlspecialchars($user['FatherName']) : '-' ?></div>
                    <div class="profile-item"><strong>Mother's Name:</strong> <?= isset($user['MotherName']) ? htmlspecialchars($user['MotherName']) : '-' ?></div>
                    <div class="profile-item"><strong>Guardian's Contact:</strong> <?= isset($user['GuardianPhoneNumber']) ? htmlspecialchars($user['GuardianPhoneNumber']) : '-' ?></div>
                    <div class="profile-item"><strong>Present Address:</strong> <?= isset($user['PresentAddress']) ? htmlspecialchars($user['PresentAddress']) : '-' ?></div>
                    <div class="profile-item"><strong>Permanent Address:</strong> <?= isset($user['PermanentAddress']) ? htmlspecialchars($user['PermanentAddress']) : '-' ?></div>
                </div>

                <!-- Change Password Section -->
                <div class="change-password-section">
                    <h3>Change Password</h3>
                    <div id="message">
                        <?php if (isset($_SESSION['error'])): ?>
                            <p class="alert error" id="error-message">
                                <?php echo $_SESSION['error']; ?>
                                <button class="close-btn" onclick="closeMessage('error')">×</button>
                            </p>
                        <?php endif; ?>

                        <?php if (isset($_SESSION['success'])): ?>
                            <p class="alert success" id="success-message">
                                <?php echo $_SESSION['success']; ?>
                                <button class="close-btn" onclick="closeMessage('success')">×</button>
                            </p>
                        <?php endif; ?>
                    </div>     
                    <form id="change-password-form" action="change_password.php" method="POST">
                        <label for="current-password">Current Password</label>
                        <input type="password" id="current-password" name="current-password" required>

                        <label for="new-password">New Password</label>
                        <input type="password" id="new-password" name="new-password" required>

                        <label for="re-enter-password">Re-enter New Password</label>
                        <input type="password" id="re-enter-password" name="re-enter-password" required>

                        <button type="submit" class="btn">Change Password</button>
                    </form>
                </div>
            </section>
            
            <section id="studentProfile" class="section">
                <h3>Student Profile</h3>
                <div id="studentSearch">
                    <label for="searchStudentId">Enter Student ID:</label>
                    <input type="text" id="searchStudentId" placeholder="Student ID">
                    <button type="button" onclick="fetchStudentProfile()">Search</button>
                </div>
            
                <div id="studentProfileDisplay">
                    <div class="profile-picture-container">
                        <img src="" alt="Profile Picture" id="student-profile-picture" />
                    </div>
            
                    <div class="profile-info">
                        <div class="profile-item"><strong>User ID:</strong> <span id="user-id-display"></span></div>
                        <div class="profile-item"><strong>Name:</strong> <span id="student-name-display"></span></div>
                        <div class="profile-item"><strong>Roll Number:</strong> <span id="roll-number-display"></span></div>
                    </div>
            
                    <div id="examSelection">
                        <label for="examTypeSelect">Select Exam:</label>
                        <select id="examTypeSelect" onchange="loadExamResults()">
                            <option value="first-term">1st Term Exam</option>
                            <option value="second-term">2nd Term Exam</option>
                            <option value="annual">Annual Exam</option>
                        </select>
                    </div>
            
                    <div id="examResults">
                        <h4>Results Table</h4>
                        <table>
                            <thead>
                                <tr>
                                    <th>Serial No.</th>
                                    <th>Subject</th>
                                    <th>Full Marks</th>
                                    <th>Written</th>
                                    <th>MCQ</th>
                                    <th>Practical</th>
                                    <th>Total</th>
                                    <th>Highest</th>
                                    <th>Letter Grade</th>
                                    <th>Grade Point</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><span id="subject1Name"></span></td>
                                    <td><span id="subject1FullMarks"></span></td>
                                    <td><span id="subject1Written"></span></td>
                                    <td><span id="subject1MCQ"></span></td>
                                    <td><span id="subject1Practical"></span></td>
                                    <td><span id="subject1Total"></span></td>
                                    <td><span id="subject1Highest"></span></td>
                                    <td><span id="subject1LetterGrade"></span></td>
                                    <td><span id="subject1GradePoint"></span></td>
                                </tr>  
                            </tbody>
                        </table>

                        <div id="totalMarksContainer">
                            <label for="monthlyExamTotal">Total of Monthly Exam:</label>
                            <span id="monthlyExamTotal"></span>
                            
                            <label for="monthlyExamPercentage">20% of Monthly Exam:</label>
                            <span id="monthlyExamPercentage"></span>
                            
                            <label for="gpaWithoutAdditional">GPA without Additional Subject:</label>
                            <span id="gpaWithoutAdditional"></span>
                            
                            <label for="totalGpa">GPA with Additional Subject:</label>
                            <span id="totalGpa"></span>
                            
                            <label for="comment">Comment:</label>
                            <p id="comment"></p>
                            
                            <label for="totalMarks">Total Marks:</label>
                            <span id="totalMarks"></span>
                            
                            <label for="procuredMarks">Procured Marks:</label>
                            <span id="procuredMarks"></span>
                        </div>

                    </div>
                </div>
            </section>
            
        </div>
    </div>
    <div data-include-footer></div>
    <script src="includeFooter.js" defer></script>
    <script src="teacherDashboard.js"></script>
</body>
</html>
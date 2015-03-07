<html>
    <head>
        <style>
            .pds { background-color: #FFF !important; }
            table td { border: 1px solid; padding: 10px; }
            table { width: 100%; }
        </style>
    </head>
        <body>
            <h2><center>Personal Data Sheet</center></h2>

            <form>
                <table>
                    <tr>
                        <td colspan="10"><b>I. Personal Information</b></td>
                    </tr>
                    <tr>
                        <td>Surname</td>
                        <td colspan="7">{{ $bio->lastname }}</td>
                    </tr>
                    <tr>
                        <td>First Name</td>
                        <td colspan="7">{{ $bio->firstname }}</td>
                    </tr>
                    <tr>
                        <td>Middle Name</td>
                        <td colspan="4">{{ $bio->middlename }}</td>
                        <td colspan="2">Name extension eg. jr</td>
                        <td> {{ $bio->nameextension }} </td>
                    </tr>
                    <tr>
                        <td colspan="2">Date of Birth (mm/dd/yyyy) </td>
                        <td colspan="3">{{ $bio->birthdate }}</td>
                        <td rowspan="3" colspan="2">Residential Address</td>
                        <td rowspan="3">{{ $bio->residentialaddress }}</td>
                    </tr>
                    <tr>
                        <td>Place of Birth </td>
                        <td colspan="4">{{ $bio->birthplace }}</td>
                    </tr>
                    <tr>
                        <td>Sex </td>
                        <td colspan="4">
                            <input type="radio" name="sex" value="Male" checked>Male
                            <input type="radio" name="sex" value="Female">Female
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="3">Civil Status </td>
                        <td rowspan="3" colspan="4">
                            <input type="radio" name="status" value="single" checked>Single
                            <input type="radio" name="status" value="married">Married<br>
                            <input type="radio" name="status" value="widow">Widow
                            <input type="radio" name="status" value="anulled">Anulled<br>
                            <input type="radio" name="status" value="seperated">Seperated
                            <input type="radio" name="status" value="others">Others please specify ____________
                        </td>
                        {{--<td colspan="2">Zip Code </td>--}}
                        {{--<td></td>--}}
                    </tr>
                    <tr>
                        <td colspan="2">Telephone Number </td>
                        <td> {{ $bio->telno }} </td>
                    </tr>
                    <tr>
                        <td rowspan="3" colspan="2">Permanent Address</td>
                        <td rowspan="3">{{ $bio->permanentaddress }}</td>
                    </tr>
                    <tr>
                        <td>Citizenship</td>
                        <td colspan="4"> {{ $bio->citizenship }} </td>
                    </tr>
                    <tr>
                        <td>Height (m)</td>
                        <td colspan="4"> {{ $bio->height }} </td>
                    </tr>
                    <tr>
                        <td>Weight (kg)</td>
                        <td colspan="7"> {{ $bio->weight }} </td>
                        {{--<td colspan="2">Zip Code</td>--}}
                        {{--<td> </td>--}}
                    </tr>
                    <tr>
                        <td>Blood Type</td>
                        <td colspan="4"> {{ $bio->bloodtype }} </td>
                        <td colspan="2">Telephone Number</td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td>GSIS Policy No.</td>
                        <td colspan="4"> {{ $bio->gsis }} </td>
                        <td colspan="2">E-Mail Address (if any)</td>
                        <td> {{ $bio->email }} </td>
                    </tr>
                    <tr>
                        <td>PAG-IBIG ID No.</td>
                        <td colspan="4"> {{ $bio->pagibig }} </td>
                        <td colspan="2">Cellphone Number (if any)</td>
                        <td> {{ $bio->celno }} </td>
                    </tr>
                    <tr>
                        <td>PhilHealth No.</td>
                        <td colspan="4"> {{ $bio->philhealth }} </td>
                        <td colspan="2">Agency Employee No.</td>
                        <td> {{ $bio->agencyemployeeno }} </td>
                    </tr>
                    <tr>
                        <td>SSS No.</td>
                        <td colspan="4"> {{ $bio->sss }} </td>
                        <td colspan="2">TIN</td>
                        <td> {{ $bio->sss }} </td>
                    </tr>
                </table>

                <table>
                    <tr>
                        <td colspan="10"><b> II. Family Background</b></td>
                    </tr>
                    <tr>
                        <td>Spouse's Surname</td>
                        <td colspan="4"> {{ $bio->spouselastname }} </td>
                        <td colspan="2">Name of Child/Children</td>
                        <td>Date of Birth (mm/dd/yyyy) </td>
                    </tr>
                    <tr>
                        <td>First Name</td>
                        <td colspan="4">{{ $bio->spousefirstname }}</td>
                        <td colspan="2"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Middle Name</td>
                        <td colspan="4">{{ $bio->spousemiddlename }}</td>
                        <td colspan="2"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Occupation</td>
                        <td colspan="4">{{ $bio->spouseoccupation }}</td>
                        <td colspan="2"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="5">Employer/Bus. Name</td>
                        <td colspan="2">{{ $bio->spouseemployername }}</td>
                        <td></td>
                    </tr>
                    {{--<tr>--}}
                        {{--<td colspan="8"><i>(Continue on separate sheet, if necessary)</i></td>--}}
                    {{--</tr>--}}
                    <tr>
                        <td>Business Address</td>
                        <td colspan="4"></td>
                        <td colspan="2"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Telephone Number</td>
                        <td colspan="4"></td>
                        <td colspan="2"></td>
                        <td></td>
                    </tr>
                        <td>Father's Name</td>
                        <td colspan="7">{{ $bio->fathername }}</td>
                    </tr>

                    <tr>
                        <td>Mother's Name</td>
                        <td colspan="7">{{ $bio->mothername }}</td>
                    </tr>
                </table>

                <table>
                    <tr>
                        <td colspan="10"><b> III. Educational Background</b></td>
                    </tr>
                    <tr>
                        <td rowspan="2">Level</td>
                        <td rowspan="2">Name of School (Write in full)</td>
                        <td rowspan="2">Degree Course (Write in full)</td>
                        <td rowspan="2">Year Graduated (if graduated)</td>
                        <td rowspan="2">Highest Grade/Level/Units Earned (if not graduated)</td>
                        <td colspan="2">Inclusive dates of attendance</td>
                        <td rowspan="2">Scholarships Academic Honors Received</td>
                    </tr>

                    <tr>
                        <td>From</td>
                        <td>To</td>
                    </tr>
                    <tr>
                        <td>Elementary</td>
                        <td>{{ $education['elementary']->schoolname }}</td>
                        <td>{{ $education['elementary']->degreecourse }}</td>
                        <td>{{ $education['elementary']->yeargraduated }}</td>
                        <td>{{ $education['elementary']->units }}</td>
                        <td>{{ $education['elementary']->attendancefrom }}</td>
                        <td>{{ $education['elementary']->attendanceto }}</td>
                        <td>{{ $education['elementary']->awards }}</td>
                    </tr>
                    <tr>
                        <td>Secondary</td>
                        <td>{{ $education['secondary']->schoolname }}</td>
                        <td>{{ $education['secondary']->degreecourse }}</td>
                        <td>{{ $education['secondary']->yeargraduated }}</td>
                        <td>{{ $education['secondary']->units }}</td>
                        <td>{{ $education['secondary']->attendancefrom }}</td>
                        <td>{{ $education['secondary']->attendanceto }}</td>
                        <td>{{ $education['secondary']->awards }}</td>
                    </tr>
                    <tr>
                        <td>Vocational/Trade Course</td>
                        <td>{{ $education['vocational']->schoolname }}</td>
                        <td>{{ $education['vocational']->degreecourse }}</td>
                        <td>{{ $education['vocational']->yeargraduated }}</td>
                        <td>{{ $education['vocational']->units }}</td>
                        <td>{{ $education['vocational']->attendancefrom }}</td>
                        <td>{{ $education['vocational']->attendanceto }}</td>
                        <td>{{ $education['vocational']->awards }}</td>
                    </tr>
                    <tr>
                        <td>College</td>
                        <td>{{ $education['college']->schoolname }}</td>
                        <td>{{ $education['college']->degreecourse }}</td>
                        <td>{{ $education['college']->yeargraduated }}</td>
                        <td>{{ $education['college']->units }}</td>
                        <td>{{ $education['college']->attendancefrom }}</td>
                        <td>{{ $education['college']->attendanceto }}</td>
                        <td>{{ $education['college']->awards }}</td>
                    </tr>
                    <tr>
                        <td>Graduate Studies</td>
                        <td>{{ $education['graduate']->schoolname }}</td>
                        <td>{{ $education['graduate']->degreecourse }}</td>
                        <td>{{ $education['graduate']->yeargraduated }}</td>
                        <td>{{ $education['graduate']->units }}</td>
                        <td>{{ $education['graduate']->attendancefrom }}</td>
                        <td>{{ $education['graduate']->attendanceto }}</td>
                        <td>{{ $education['graduate']->awards }}</td>
                    </tr>
                </table>

                <table>
                    <tr>
                        <td colspan="10"><b>IV. Civil Service Eligibility</b></td>
                    </tr>
                    <tr>
                        <td rowspan="2" colspan="2">Career Service/RA 1080(Board/Bar) Under Special Laws/CES/CSEE</td>
                        <td rowspan="2">Rating</td>
                        <td rowspan="2">Date of Examination/Conferment</td>
                        <td rowspan="2" colspan="2">Place of Examination/Conferment</td>
                        <td colspan="2">License (if applicable)</td>
                    </tr>
                    <tr>
                        <td>Number</td>
                        <td>Date of Release</td>
                    </tr>
                    <tr>
                        <td colspan="2">{{ $civil->careerservice }}</td>
                        <td>{{ $civil->rating }}</td>
                        <td>{{ $civil->examinationdate }}</td>
                        <td colspan="2">{{ $civil->examinationplace }}</td>
                        <td>{{ $civil->licensenumber }}</td>
                        <td> {{ $civil->careerservice }}</td>
                    </tr>
                    <tr>
                        <td colspan="2">a</td>
                        <td></td>
                        <td></td>
                        <td colspan="2"></td>
                        <td></td>
                        <td> </td>
                    </tr>
                </table>

                <table>
                    <tr>
                        <td colspan="10"><b>V. Work Experience (Include private employment.  Start from most recent work experience.)</b></td>
                    </tr>
                    <tr>
                        <td colspan="2">Inclusive Dates</td>
                        <td rowspan="2">Position Title (Write in full)</td>
                        <td rowspan="2">Department/Agency/Office (Write in full)</td>
                        <td rowspan="2">Monthly Salary</td>
                        <td rowspan="2">Salary Grade & Steo </td>
                        <td rowspan="2">Satus of Appointment</td>
                        <td rowspan="2">Government Service(Yse/No)</td>
                    </tr>
                    <tr>
                        <td>From</td>
                        <td>To</td>
                    </tr>
                    <tr>
                        <td>a</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>a</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>a</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>

                <table>
                    <tr>
                        <td colspan="10"><b>VI. VOLUNTARY WORK OR INVOLVEMENT IN CIVIC / NON-GOVERNMENT / PEOPLE / VOLUNTARY ORGANIZATION/S</b></td>
                    </tr>
                    <tr>
                        <td colspan="3" rowspan="2">Name and Address of Organization (Write in full)</td>
                        <td colspan="2">Inclusive Dates (mm/dd/yyyy)</td>
                        <td colspan="2" rowspan="2">Number of hours</td>
                        <td colspan="2" rowspan="2">Position/nature of work</td>
                    </tr>
                    <tr>
                        <td>From</td>
                        <td>To</td>
                    </tr>
                    <tr>
                        <td colspan="3">a</td>
                        <td></td>
                        <td></td>
                        <td colspan="2"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="3">a</td>
                        <td></td>
                        <td></td>
                        <td colspan="2"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="3">a</td>
                        <td></td>
                        <td></td>
                        <td colspan="2"></td>
                        <td></td>
                    </tr>
                </table>

                <table>
                    <tr>
                        <td colspan="10"><b>VII.  TRAINING PROGRAMS/ STUDY/ SCHOLARSHIP GRANTS (Start from the most recent training.)</b></td>
                    </tr>
                    <tr>
                        <td colspan="3" rowspan="2">TITLE OF SEMINAR/CONFERENCE/WORKSHOP/SHORT COURSES (Write in full)</td>
                        <td colspan="2">Inclusive Dates of Attendance(mm/dd/yyyy)</td>
                        <td colspan="2" rowspan="2">Number of hours</td>
                        <td colspan="2" rowspan="2">Conducted/sponsored by</td>
                    </tr>
                    <tr>
                        <td>From</td>
                        <td>To</td>
                    </tr>
                    <tr>
                        <td colspan="3">a</td>
                        <td></td>
                        <td></td>
                        <td colspan="2"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="3">a</td>
                        <td></td>
                        <td></td>
                        <td colspan="2"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="3">a</td>
                        <td></td>
                        <td></td>
                        <td colspan="2"></td>
                        <td></td>
                    </tr>
                </table>

                <table>
                    <tr>
                        <td colspan="10"><b>VIII.  OTHER INFORMATION</b></td>
                    </tr>
                    <tr>
                        <td colspan="3">Special Skills/Hobbies</td>
                        <td colspan="2">Non-Academic Distinction/Recognition</td>
                        <td colspan="2">MEMBERSHIP IN ASSOCIATION/ORGANIZATION</td>
                    </tr>
                    <tr>
                        <td colspan="3">a</td>
                        <td colspan="2"></td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td colspan="3">a</td>
                        <td colspan="2"></td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td colspan="3">a</td>
                        <td colspan="2"></td>
                        <td colspan="2"></td>
                    </tr>
                </table>
            </form>
        </body>
</html>
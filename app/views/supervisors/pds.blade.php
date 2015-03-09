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
                        <td colspan="7">{{ isset($bio->lastname) ? ucfirst($bio->lastname) : '' }}</td>
                    </tr>
                    <tr>
                        <td>First Name</td>
                        <td colspan="7">{{ isset($bio->firstname) ? ucfirst($bio->firstname) : '' }}</td>
                    </tr>
                    <tr>
                        <td>Middle Name</td>
                        <td colspan="4">{{ isset($bio->middlename) ? ucfirst($bio->middlename) : '' }}</td>
                        <td colspan="2">Name extension eg. jr</td>
                        <td> {{ isset($bio->nameextension) ? ucfirst($bio->nameextension) : '' }} </td>
                    </tr>
                    <tr>
                        <td>Date of Birth (mm/dd/yyyy) </td>
                        <td colspan="4">{{ isset($bio->birthdate) ? date('m/d/Y', strtotime($bio->birthdate)) : '' }}</td>
                        <td rowspan="3" colspan="2">Residential Address</td>
                        <td rowspan="3">{{ isset($bio->residentialaddress) ? ucfirst($bio->residentialaddress) : '' }}</td>
                    </tr>
                    <tr>
                        <td>Place of Birth </td>
                        <td colspan="4">{{ isset($bio->birthplace) ? ucfirst($bio->birthplace) : '' }}</td>
                    </tr>
                    <tr>
                        <td>Sex </td>
                        <td colspan="4"> {{ isset($bio->gender) ? ucfirst($bio->gender) : '' }} </td>
                    </tr>
                    <tr>
                        <td rowspan="3">Civil Status </td>
                        <td rowspan="3" colspan="4"> {{ isset($bio->civilstatus) ? ucfirst($bio->civilstatus) : '' }} </td>
                        {{--<td colspan="2">Zip Code </td>--}}
                        {{--<td></td>--}}
                    </tr>
                    <tr>
                        <td colspan="2">Telephone Number </td>
                        <td> {{ isset($bio->telno) ? $bio->telno : '' }} </td>
                    </tr>
                    <tr>
                        <td rowspan="4" colspan="2">Permanent Address</td>
                        <td rowspan="4">{{ isset($bio->permanentaddress) ? ucfirst($bio->permanentaddress) : '' }}</td>
                    </tr>
                    <tr>
                        <td>Citizenship</td>
                        <td colspan="4"> {{ isset($bio->citizenship) ? ucfirst($bio->citizenship) : '' }} </td>
                    </tr>
                    <tr>
                        <td>Height (m)</td>
                        <td colspan="4"> {{ isset($bio->height) ? $bio->height : '' }} </td>
                    </tr>
                    <tr>
                        <td>Weight (kg)</td>
                        <td colspan="4"> {{ isset($bio->weight) ? $bio->weight : '' }} </td>
                        {{--<td colspan="2">Zip Code</td>--}}
                        {{--<td> </td>--}}
                    </tr>
                    <tr>
                        <td>Blood Type</td>
                        <td colspan="4"> {{ isset($bio->bloodtype) ? ucfirst($bio->bloodtype) : '' }} </td>
                        <td colspan="2">Telephone Number</td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td>GSIS Policy No.</td>
                        <td colspan="4"> {{ isset($bio->gsis) ? $bio->gsis : '' }} </td>
                        <td colspan="2">E-Mail Address (if any)</td>
                        <td> {{ isset($bio->email) ? $bio->email : '' }} </td>
                    </tr>
                    <tr>
                        <td>PAG-IBIG ID No.</td>
                        <td colspan="4"> {{ isset($bio->pagibig) ? $bio->pagibig : '' }} </td>
                        <td colspan="2">Cellphone Number (if any)</td>
                        <td> {{ isset($bio->celno) ? $bio->celno : '' }} </td>
                    </tr>
                    <tr>
                        <td>PhilHealth No.</td>
                        <td colspan="4"> {{ isset($bio->philhealth) ? $bio->philhealth : '' }} </td>
                        <td colspan="2">Agency Employee No.</td>
                        <td> {{ isset($bio->agencyemployeeno) ? $bio->agencyemployeeno : '' }} </td>
                    </tr>
                    <tr>
                        <td>SSS No.</td>
                        <td colspan="4"> {{ isset($bio->sss) ? $bio->sss : '' }} </td>
                        <td colspan="2">TIN</td>
                        <td> {{ isset($bio->tin) ? $bio->tin : '' }} </td>
                    </tr>
                </table>

                <table>
                    <tr>
                        <td colspan="10"><b> II. Family Background</b></td>
                    </tr>
                    <tr>
                        <td>Spouse's Surname</td>
                        <td colspan="4"> {{ isset($bio->spouselastname) ? ucfirst($bio->spouselastname) : '' }} </td>
                        <!-- <td colspan="2">Name of Child/Children</td>
                        <td>Date of Birth (mm/dd/yyyy) </td> -->
                    </tr>
                    <tr>
                        <td>First Name</td>
                        <td colspan="4">{{ isset($bio->spousefirstname) ? ucfirst($bio->spousefirstname) : '' }}</td>
                        <!-- <td colspan="2"></td>
                        <td></td> -->
                    </tr>
                    <tr>
                        <td>Middle Name</td>
                        <td colspan="4">{{ isset($bio->spousemiddlename) ? ucfirst($bio->spousemiddlename) : '' }}</td>
                        <!-- <td colspan="2"></td>
                        <td></td> -->
                    </tr>
                    <tr>
                        <td>Occupation</td>
                        <td colspan="4">{{ isset($bio->spouseoccupation) ? ucfirst($bio->spouseoccupation) : '' }}</td>
                        <!-- <td colspan="2"></td>
                        <td></td> -->
                    </tr>
                    <tr>
                        <td>Employer/Bus. Name</td>
                        <td colspan="4">{{ isset($bio->spouseemployername) ? ucfirst($bio->spouseemployername) : '' }}</td>
                        <!-- <td colspan="2"></td>
                        <td></td> -->
                    </tr>
                    {{--<tr>--}}
                        {{--<td colspan="8"><i>(Continue on separate sheet, if necessary)</i></td>--}}
                    {{--</tr>--}}
                    <tr>
                        <td>Business Address</td>
                        <td colspan="4"></td>
                        <!-- <td colspan="2"></td>
                        <td></td> -->
                    </tr>
                    <tr>
                        <td>Telephone Number</td>
                        <td colspan="4"></td>
                        <!-- <td colspan="2"></td>
                        <td></td> -->
                    </tr>
                        <td>Father's Name</td>
                        <td colspan="7">{{ isset($bio->fathername) ? ucfirst($bio->fathername) : '' }}</td>
                    </tr>

                    <tr>
                        <td>Mother's Name</td>
                        <td colspan="7">{{ isset($bio->mothername) ? ucfirst($bio->mothername) : '' }}</td>
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
                    @if($educations->isEmpty())
                        <tr><td colspan="8"><i>No inputted education experience</i></td></tr>
                    @else
                        @foreach($educations as $education)
                        <tr>
                            <td>{{ ucfirst($education->level) }}</td>
                            <td>{{ ucfirst($education->schoolname) }}</td>
                            <td>{{ ucfirst($education->degreecourse) }}</td>
                            <td>{{ $education->yeargraduated }}</td>
                            <td>{{ $education->units }}</td>
                            <td>{{ date('m/d/Y', strtotime($education->attendancefrom)) }}</td>
                            <td>{{ date('m/d/Y', strtotime($education->attendanceto)) }}</td>
                            <td>{{ ucfirst($education->awards) }}</td>
                        </tr>
                        @endforeach
                    @endif
                    
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
                    @if($civils->isEmpty())
                        <tr><td colspan="8"><i>No inputted civil service eligibility...</i></td></tr>
                    @else
                        @foreach($civils as $civil)
                        <tr>
                            <td colspan="2">{{ $civil->careerservice }}</td>
                            <td>{{ $civil->rating }}</td>
                            <td>{{ date('m/d/Y', strtotime($civil->examinationdate)) }}</td>
                            <td colspan="2">{{ $civil->examinationplace }}</td>
                            <td>{{ $civil->licensenumber }}</td>
                            <td> {{ $civil->careerservice }}</td>
                        </tr>
                        @endforeach
                    @endif
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
                    @if($works->isEmpty())
                        <tr><td colspan="8"><i>No inputted work experience...</i></td></tr>
                    @else
                        @foreach($works as $work)
                        <tr>
                            <td>{{ date('m/d/Y', strtotime($work->datefrom)) }}</td>
                            <td>{{ date('m/d/Y', strtotime($work->dateto)) }}</td>
                            <td>{{ $work->position }}</td>
                            <td>{{ $work->department }}</td>
                            <td>{{ $work->salary }}</td>
                            <td>{{ $work->salarygrade }}</td>
                            <td>{{ $work->statusappointment }}</td>
                            <td>{{ $work->governmentservice }}</td>
                        </tr>
                        @endforeach
                    @endif
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
                    @if($voluntary->isEmpty())
                        <tr><td colspan="8"><i>No inputted voluntary work...</i></td></tr>
                    @else
                        @foreach($voluntary as $vol)
                        <tr>
                            <td colspan="3">{{ $vol->organization }}</td>
                            <td>{{ date('m/d/Y', strtotime($vol->datefrom)) }}</td>
                            <td>{{ date('m/d/Y', strtotime($vol->dateto)) }}</td>
                            <td colspan="2">{{ $vol->numberofhours }}</td>
                            <td>{{ $vol->position }}</td>
                        </tr>
                        @endforeach
                    @endif
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
                    @if($trainings->isEmpty())
                        <tr><td colspan="8"><i>No inputted trainings...</i></td></tr>
                    @else
                        @foreach($trainings as $training)
                        <tr>
                            <td colspan="3">{{ $training->seminar }}</td>
                            <td>{{ date('m/d/Y', strtotime($training->datefrom)) }}</td>
                            <td>{{ date('m/d/Y', strtotime($training->dateto)) }}</td>
                            <td colspan="2">{{ $training->numberofhours }}</td>
                            <td>{{ $training->sponsor }}</td>
                        </tr>
                        @endforeach
                    @endif
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
                    
                    <?php $highest = max(count($hobbies), count($recognitions), count($organizations)) ?>

                    @for($x = 0; $x < $highest; $x++ )
                    <tr>   
                        <td colspan="3"> {{ isset($hobbies[$x]) ? $hobbies[$x]->hobby : 'No hobbies inputted...' }} </td>
                        <td colspan="3"> {{ isset($recognitions[$x]) ? $recognitions[$x]->recognition : 'No recognitions inputted...' }} </td>
                        <td colspan="2"> {{ isset($organizations[$x]) ? $organizations[$x]->organization : 'No organizations inputted...' }} </td>
                    </tr>
                    @endfor
                </table>

            </form>
        </body>
</html>
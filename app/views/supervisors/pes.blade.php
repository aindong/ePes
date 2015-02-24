@extends('layouts.default')

<style>
    h4 {
        text-align: center;
        line-height: 0.5em;
    }

    .period {
        margin-top: 30px;
    }

    table {
        font-size: 13px;
    }

    .pes th {
        font-size: 20px;
    }

    .pes td.title{
        font-size: 15px;
    }

    .pes tbody td, .pes thead{
        border: 1px solid;
        border-color: rgba(0,0,0, 1) !important;
    }

    .pes .answer {
        border: 0px;
        width: 30px;
        height: 2em;
    }

</style>
@section('content')
    <h4>Evaluating: {{{ isset($user->bio->lastname) ? ucfirst($user->bio->lastname) : '' }}}, {{{ isset($user->bio->firstname) ? ucfirst($user->bio->firstname) : '' }}} {{{ isset($user->bio->middlename) ? ucfirst($user->bio->middlename) : '' }}}.</h4>

    {{ Form::open(['url' => '/supervisors/doPes/'.$user->employee_no, 'method' => 'POST']) }}
    <h3>Instuctions</h3>
    <ol>
        <li>This form is used for evaluating the performance of your Casual, Contractual and Job Order Employees. Reproduction of this form is allowed.</li>
        <li>Please observe fairness and objectivity when rating.</li>
        <li>In your rating, check the box that most objectively represents the ratee’s level of performance guided by the definitions of rating under each factor.
            <br>Please use the rating scale below:
            <br/>

            <table class="table">
                <thead>
                    <th>SCALE</th>
                    <th>ADJECTIVE RATING</th>
                </thead>

                <tbody>
                    <tr>
                        <td>10</td>
                        <td><b>O</b> (Outstanding)</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td><b>VS</b> (Very Satisfactory)</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td><b>S</b> (Satisfactory)</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><b>U</b> (Unsatisfactory)</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><b>P</b> (Poor)</td>
                    </tr>
                </tbody>
            </table>
        </li>
        {{--<li>Ensure that signatures are properly affixed after accomplishing this form</li>--}}
    </ol>

    <table class="table pes">
        <thead>
            <th>JOB FACTORS</th>
            <th>10</th>
            <th>8</th>
            <th>6</th>
            <th>4</th>
            <th>2</th>
        </thead>

        <tbody>
            <tr>
                <td colspan="6" class="title">PART I - PERFORMANCE(70%)</td>
            </tr>

            <tr>
                <td>
                    WORK QUANTITY/OUTPUT <br/>
                    Overall work accomplishment in relation with targets/assigned tasks
                </td>
                <td><input type="radio" class="answer" name="q1" value="10"/></td>
                <td><input type="radio" class="answer" name="q1" value="8"/></td>
                <td><input type="radio" class="answer" name="q1" value="6"/></td>
                <td><input type="radio" class="answer" name="q1" value="4"/></td>
                <td><input type="radio" class="answer" name="q1" value="2" checked/></td>
            </tr>

            <tr>
                <td>
                    WORK QUALITY <br/>
                    Efficiency and effectiveness vis a vis job requirement and expectations.
                </td>
                <td><input type="radio" class="answer" name="q2" value="10"/></td>
                <td><input type="radio" class="answer" name="q2" value="8"/></td>
                <td><input type="radio" class="answer" name="q2" value="6"/></td>
                <td><input type="radio" class="answer" name="q2" value="4"/></td>
                <td><input type="radio" class="answer" name="q2" value="2" checked/></td>
            </tr>

            <tr>
                <td>
                    WORK ATTITUDE <br/>
                    Pride, interest and job dedication, cheerfulness despite work pressures.
                </td>
                <td><input type="radio" class="answer" name="q3" value="10"/></td>
                <td><input type="radio" class="answer" name="q3" value="8"/></td>
                <td><input type="radio" class="answer" name="q3" value="6"/></td>
                <td><input type="radio" class="answer" name="q3" value="4"/></td>
                <td><input type="radio" class="answer" name="q3" value="2" checked/></td>
            </tr>

            <tr>
                <td colspan="6" class="title">PART II - CRITICAL FACTORS(30%)</td>
            </tr>

            <tr>
                <td>
                    PUNCTUALITY AND ATTENDANCE <br/>
                    Observed behavior of coming to the office or to be present at work to complete assigned tasks
                </td>
                <td><input type="radio" class="answer" name="q4" value="10"/></td>
                <td><input type="radio" class="answer" name="q4" value="8"/></td>
                <td><input type="radio" class="answer" name="q4" value="6"/></td>
                <td><input type="radio" class="answer" name="q4" value="4"/></td>
                <td><input type="radio" class="answer" name="q4" value="2" checked/></td>
            </tr>

            <tr>
                <td>
                    COURTESY <br/>
                    Polite, kind & thoughtful behavior towards the public/clientele in manners of speech and actions
                </td>
                <td><input type="radio" class="answer" name="q5" value="10"/></td>
                <td><input type="radio" class="answer" name="q5" value="8"/></td>
                <td><input type="radio" class="answer" name="q5" value="6"/></td>
                <td><input type="radio" class="answer" name="q5" value="4"/></td>
                <td><input type="radio" class="answer" name="q5" value="2" checked/></td>
            </tr>

            <tr>
                <td>
                    HUMAN RELATIONS <br/>
                    Concern for people at work, including supervisor-subordinate relationship and office clientele
                </td>
                <td><input type="radio" class="answer" name="q6" value="10"/></td>
                <td><input type="radio" class="answer" name="q6" value="8"/></td>
                <td><input type="radio" class="answer" name="q6" value="6"/></td>
                <td><input type="radio" class="answer" name="q6" value="4"/></td>
                <td><input type="radio" class="answer" name="q6" value="2" checked/></td>
            </tr>

            <tr>
                <td>
                    INITIATIVE <br/>
                    Starts action, projects and performs assigned tasks without being told and under minimal supervision
                </td>
                <td><input type="radio" class="answer" name="q7" value="10"/></td>
                <td><input type="radio" class="answer" name="q7" value="8"/></td>
                <td><input type="radio" class="answer" name="q7" value="6"/></td>
                <td><input type="radio" class="answer" name="q7" value="4"/></td>
                <td><input type="radio" class="answer" name="q7" value="2" checked/></td>
            </tr>

            <tr>
                <td>
                    STRESS TOLERANCE <br/>
                    Stability of performance under pressure or opposition
                </td>
                <td><input type="radio" class="answer" name="q8" value="10"/></td>
                <td><input type="radio" class="answer" name="q8" value="8"/></td>
                <td><input type="radio" class="answer" name="q8" value="6"/></td>
                <td><input type="radio" class="answer" name="q8" value="4"/></td>
                <td><input type="radio" class="answer" name="q8" value="2" checked/></td>
            </tr>

            <tr>
                <td>
                    JUDGEMENT/DECISION MAKING <br/>
                    Ability to develop alternative solutions to problems to reach a sound decision & readiness to take action or commit oneself
                </td>
                <td><input type="radio" class="answer" name="q9" value="10"/></td>
                <td><input type="radio" class="answer" name="q9" value="8"/></td>
                <td><input type="radio" class="answer" name="q9" value="6"/></td>
                <td><input type="radio" class="answer" name="q9" value="4"/></td>
                <td><input type="radio" class="answer" name="q9" value="2" checked/></td>
            </tr>

            <tr>
                <td>
                    INTEGRITY <br/>
                    Trustworthiness, honesty, and honor of the person
                </td>
                <td><input type="radio" class="answer" name="q10" value="10"/></td>
                <td><input type="radio" class="answer" name="q10" value="8"/></td>
                <td><input type="radio" class="answer" name="q10" value="6"/></td>
                <td><input type="radio" class="answer" name="q10" value="4"/></td>
                <td><input type="radio" class="answer" name="q10" value="2" checked/></td>
            </tr>

            <tr>
                <td colspan="6" class="title">PART III - SCORE</td>
            </tr>

            <tr>
                <td colspan="3" class="title">I AVERAGE RATING (SUM/3 x 70%)</td>
                <td colspan="3" class="title"> <span class="part1"></span></td>
            </tr>
            <tr>
                <td colspan="3" class="title">II AVERAGE RATING (SUM/7 x 30%)</td>
                <td colspan="3" class="title"> <span class="part2"></span></td>
            </tr>
            <tr>
                <td colspan="3" class="title">OVERTALL POINT SCORE (PART I + PART II)</td>
                <td colspan="3" class="title"> <span class="overall"></span></td>
            </tr>
            <tr>
                <td colspan="3" class="title">ADJECTIVAL RATING</td>
                <td colspan="3" class="title"> <span class="adjective"></span></td>
            </tr>
        </tbody>
    </table>

    <br/>
    <p style="font-size: 20px;">
        <label for="honest">
            <input type="checkbox" id="honest"/>
            I hereby certify that the above rating is an objective, honest, and an impartial evaluation of the employee’s performance and that I am responsible and liable for its correctness and truthfulness. I also confirm that I am cognizant that I may be held accountable in case the PHRMO and/or the PERC finds the above rating as unsound or erroneous.
        </label>
    </p>

    <button type="submit" class="btn btn-primary btnSubmit" disabled>Submit Evaluation</button>
    {{ Form::close() }}
@stop

@section('page-script')
    <script type="text/javascript">
        $('#honest').on('change', function(e) {
            if($(this).is(':checked')) {
                $('.btnSubmit').attr('disabled', false);
            } else {
                $('.btnSubmit').attr('disabled', true);
            }
        });

        $(".form_datetime").datetimepicker({
            format: "yyyy-mm-dd hh:ii:ss",
            autoclose: true,
            todayBtn: true,
            pickerPosition: "bottom-left"
        });

        var q1  = parseInt($('.answer[name="q1"]:checked').val()),
            q2  = parseInt($('.answer[name="q2"]:checked').val()),
            q3  = parseInt($('.answer[name="q3"]:checked').val()),
            q4  = parseInt($('.answer[name="q4"]:checked').val()),
            q5  = parseInt($('.answer[name="q5"]:checked').val()),
            q6  = parseInt($('.answer[name="q6"]:checked').val()),
            q7  = parseInt($('.answer[name="q7"]:checked').val()),
            q8  = parseInt($('.answer[name="q8"]:checked').val()),
            q9  = parseInt($('.answer[name="q9"]:checked').val()),
            q10 = parseInt($('.answer[name="q10"]:checked').val());

        var calculatePart1 = function() {
            return ((q1 + q2 + q3)/3) * 0.7;
        };

        var calculatePart2 = function() {
            return ((q4 + q5 + q6 + q7 + q8 + q9 + q10)/7) * 0.3;
        };

        var calculate = function() {
            q1  = parseInt($('.answer[name="q1"]:checked').val()),
            q2  = parseInt($('.answer[name="q2"]:checked').val()),
            q3  = parseInt($('.answer[name="q3"]:checked').val()),
            q4  = parseInt($('.answer[name="q4"]:checked').val()),
            q5  = parseInt($('.answer[name="q5"]:checked').val()),
            q6  = parseInt($('.answer[name="q6"]:checked').val()),
            q7  = parseInt($('.answer[name="q7"]:checked').val()),
            q8  = parseInt($('.answer[name="q8"]:checked').val()),
            q9  = parseInt($('.answer[name="q9"]:checked').val()),
            q10 = parseInt($('.answer[name="q10"]:checked').val());

            var part1       = calculatePart1(),
                part2       = calculatePart2(),
                overall     = (part1 + part2),
                rating      = '';

            $('.part1').html(part1);
            $('.part2').html(part2);
            $('.overall').html(overall);

            if (overall > 8) {
                rating = 'O (OUTSTANDING)';
            } else if (overall > 6 && overall <= 8) {
                rating = 'VS (VERY SATISFACTORY)';
            } else if (overall > 4 && overall <= 6) {
                rating = 'S (SATISFACTORY)';
            } else if (overall > 2 && overall <= 4) {
                rating = 'U (UNSATISFACTORY)';
            } else if (overall <= 2) {
                rating = 'P (POOR)';
            }
            $('.adjective').html(rating);

            console.log(q1);
        };

        $(function() {
            calculate();

            $('.answer').on('change', function() {
                calculate();
            });
        });
    </script>
@stop

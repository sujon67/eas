<?php
/**
 * Created by PhpStorm.
 * User: sujon
 * Date: 12/22/16
 * Time: 2:09 AM
 */?>
<!--Form section starts-->
<div class="row">
    <form class="col m12 s12">
        <div class="col m3 "></div>
        <div class="col m6 s12" style="background-color: wheat">

            <!--Basic section-->
            <div class="row">
                <h4>Enter Designation name and related Salary, Allowance</h4>
                <div class="input-field col m6 s12">
                    <i class="mdi mdi-face-profile prefix"></i>
                    <input type="text" id="post" onkeyup="subTotal()" value="">
                    <label for="post">Designation Name</label>
                </div>

                <div class="input-field col m6 s12">
                    <i class="mdi mdi-cash-multiple prefix"></i>
                    <input type="text" id="basic" onkeyup="subTotal()" value="">
                    <label for="basic">Basic salary</label>
                </div>
            </div>

            <!--Allowance section-->
            <div class="row col m12 s12 center">
                <h5>Allowance table</h5>
            </div>

            <div class="row">
                <table class=" bordered highlight " >
                    <thead>
                        <tr style="border-color: black">
                           <th>Allowance name</th>
                            <th><span class="right" >Amount in tk</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr id="tRow0" style="border-color: black">
                            <td contenteditable></td>
                            <td contenteditable></td>
                        </tr>
                    </tbody>
                </table>

                <!--Notification section-->
                <div id="Rwarn" class="center"></div>

                <!--Buttons for creating or removing new row-->
                <div class="row">
                    <a id="create" class="btn left">+</a>
                    <a id="delete" class="btn right">-</a>
                </div>
            </div>

            <button type="submit" class="btn right">Submit</button>
        </div>
        <div class="col m3 "></div>
    </form>
</div>
<!--Form section ends in here-->
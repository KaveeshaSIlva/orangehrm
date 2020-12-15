<?php
/**
 * OrangeHRM is a comprehensive Human Resource Management (HRM) System that captures
 * all the essential functionalities required for any enterprise.
 * Copyright (C) 2006 OrangeHRM Inc., http://www.orangehrm.com
 *
 * OrangeHRM is free software; you can redistribute it and/or modify it under the terms of
 * the GNU General Public License as published by the Free Software Foundation; either
 * version 2 of the License, or (at your option) any later version.
 *
 * OrangeHRM is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with this program;
 * if not, write to the Free Software Foundation, Inc., 51 Franklin Street, Fifth Floor,
 * Boston, MA  02110-1301, USA
 */

use Orangehrm\Rest\Api\User\Attendance\AttendanceListAPI;
use Orangehrm\Rest\Http\Request;
use Orangehrm\Rest\Api\Exception\NotImplementedException;

class AttendanceListApiAction extends BaseUserApiAction
{
    /**
     * @var null|AttendanceListAPI
     */
    private $attendanceListAPI = null;

    /**
     * @param Request $request
     */
    protected function init(Request $request)
    {
        $this->attendanceListAPI = new AttendanceListAPI($request);
        $this->getValidationRule = $this->attendanceListAPI->getValidationRules();
    }

    /**
     * @OA\Get(
     *     path="/attendance/attendance-list",
     *     summary="Get Attendance List",
     *     tags={"Attendance","User"},
     *     @OA\Parameter(
     *         name="fromDate",
     *         in="query",
     *         required=false,
     *         @OA\Schema(type="string"),
     *         description="From date",
     *     ),
     *     @OA\Parameter(
     *         name="toDate",
     *         in="query",
     *         required=false,
     *         @OA\Schema(type="string"),
     *         description="To date",
     *     ),
     *     @OA\Parameter(
     *         name="empNumber",
     *         in="query",
     *         required=false,
     *         @OA\Schema(type="number"),
     *         description="Employee number",
     *     ),
     *     @OA\Parameter(
     *         name="pastEmployee",
     *         in="query",
     *         required=false,
     *         @OA\Schema(type="boolean"),
     *         description="Include past employee results",
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/AttendanceList"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="No Bound User",
     *         @OA\JsonContent(ref="#/components/schemas/NoBoundUserError"),
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="No Records Found",
     *         @OA\JsonContent(ref="#/components/schemas/RecordNotFoundException"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Employee Not Found",
     *         @OA\JsonContent(ref="#/components/schemas/EmployeeNotFoundException"),
     *     ),
     * )
     * @OA\Schema(
     *     schema="AttendanceList",
     *     type="object",
     *     example={"data":{{"employeeId":"1","employeeName":"AbbeyKayla","duration":"8:48"},{"employeeId":"7","employeeName":"RachelMunguia","duration":"8:02"}},"rels":{}}
     * )
     * @OA\Schema(
     *     schema="EmployeeNotFoundException",
     *     type="object",
     *     example={"error":{"Employee Not Found"}}
     * )
     */
    protected function handleGetRequest(Request $request)
    {
        $this->setUserToContext();
        return $this->attendanceListAPI->getAttendanceList();
    }

    /**
     * @param Request $request
     * @throws NotImplementedException
     */
    protected function handlePostRequest(Request $request)
    {
        throw new NotImplementedException();
    }
}

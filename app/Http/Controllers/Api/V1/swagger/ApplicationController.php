<?php

namespace App\Http\Controllers\Api\V1\swagger;

use OpenApi\Annotations as OA;


/**
 * @OA\Info(
 *     title="Api for test",
 *     version="1.0.0"
 * ),
 *
 * @OA\PathItem(
 *      path="/api/"
 * ),
 *
 *
 * @OA\Get(
 *     path="/api/v1/getApplications",
 *     summary="Получить",
 *     tags={"Applications"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\Response(
 *        response="200",
 *        description="ok",
 *        @OA\JsonContent(
 *              @OA\Property(property="id", type="integer", example="id client"),
 *              @OA\Property(property="name", type="string", example="name client"),
 *              @OA\Property(property="email", type="string", example="email client"),
 *              @OA\Property(property="status", type="string", example="status client"),
 *              @OA\Property(property="message", type="string", example="message client"),
 *              @OA\Property(property="comment", type="string", example="comment client"),
 *              @OA\Property(property="created_at", type="string", example="created_at client"),
 *              @OA\Property(property="updated_at", type="string", example="updated_at client"),
 *
 *        ),
 *     )
 * ),
 *
 * @OA\Get(
 *     path="/api/v1/getApplication/{application}",
 *     summary="Получить единичную",
 *     tags={"Applications"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\Parameter(
 *          description="ID заявки",
 *          in="path",
 *          name="application",
 *          required=true,
 *          example=1
 *      ),
 *     @OA\Response(
 *        response="200",
 *        description="ok",
 *        @OA\JsonContent(
 *              @OA\Property(property="id", type="integer", example="7"),
 *              @OA\Property(property="name", type="string", example="Marchenko Yrii Valentinovich"),
 *              @OA\Property(property="email", type="string", example="emelvin@gmail.com"),
 *              @OA\Property(property="status", type="string", example="Active"),
 *              @OA\Property(property="message", type="string", example="Здравствуйте. Рассмотрите мою заявку"),
 *              @OA\Property(property="comment", type="string", example="null"),
 *              @OA\Property(property="created_at", type="string", example="31-01-2024"),
 *              @OA\Property(property="updated_at", type="string", example="31-01-2024"),
 *
 *        ),
 *     )
 * ),
 *
 * @OA\Post(
 *    path="/api/v1/createApplications",
 *    summary="Создать",
 *    tags={"Applications"},
 *    security={{ "bearerAuth": {} }},
 *        @OA\RequestBody(
 *             @OA\JsonContent(
 *                  allOf={
 *                      @OA\Schema(
 *                           @OA\Property(property="name", type="string", example="Marchenko Yurii Valentinovich"),
 *                           @OA\Property(property="email", type="string", example="melvin@gmail.com"),
 *                           @OA\Property(property="message", type="string", example="Здравствуйте. Рассмотрите мою заявку"),
 *                      ),
 *                  }
 *             ),
 *        ),
 *
 *      @OA\Response(
 *          response="200",
 *          description="ok",
 *              @OA\JsonContent(
 *                  @OA\Property(property="success", type="string", example="true"),
 *                  @OA\Property(
 *                      property="data",
 *                      type="object",
 *                      @OA\Property(property="id", type="integer", example="1"),
 *                      @OA\Property(property="name", type="string", example="Marchenko Yurii Valentinovich"),
 *                      @OA\Property(property="email", type="string", example="melvin@gmail.com"),
 *                      @OA\Property(property="status", type="string", example="null"),
 *                      @OA\Property(property="message", type="string", example="Здравствуйте. Рассмотрите мою заявку"),
 *                      @OA\Property(property="comment", type="string", example="null"),
 *                      @OA\Property(property="created_at", type="string", example="31-01-2024"),
 *                      @OA\Property(property="updated_at", type="string", example="31-01-2024"),
 *                  ),
 *                   @OA\Property(property="message", type="string", example="Заявка была успешно обновлена"),
 *
 *              ),
 *       )
 * ),
 *
 * @OA\Put(
 *     path="/api/v1/updateApplications/{application}",
 *     summary="Обновить",
 *     tags={"Applications"},
 *          @OA\Parameter(
 *              description="ID заявки",
 *              in="path",
 *              name="application",
 *              required=true,
 *              example=1
 *          ),
 *
 *           @OA\RequestBody(
 *             @OA\JsonContent(
 *                  allOf={
 *                      @OA\Schema(
 *                           @OA\Property(property="status", type="string", example="Resolved"),
 *                           @OA\Property(property="comment", type="string", example="Я рассмотрел заявку и теперь она получит статус Resolved"),
 *                      ),
 *                   }
 *               ),
 *           ),
 *
 *          @OA\Response(
 *              response="200",
 *              description="ok",
 *              @OA\JsonContent(
 *                  @OA\Property(property="success", type="string", example="true"),
 *                  @OA\Property(
 *                      property="data",
 *                      type="object",
 *                      description="An example object representing the updated data.",
 *                      @OA\Property(property="comment", type="string", example="Я рассмотрел заявку и теперь она получит статус Resolved"),
 *                      @OA\Property(property="status", type="string", example="Resolved")
 *                  ),
 *                   @OA\Property(property="message", type="string", example="Заявка была успешно обновлена"),
 *              ),
 *          ),
 * ),
 *
 *
 * * @OA\Delete(
 *     path="/api/v1/deleteApplications/{application}",
 *     summary="Удалить",
 *     tags={"Applications"},
 *     security={{ "bearerAuth": {} }},
 *          @OA\Parameter(
 *              description="ID заявки",
 *              in="path",
 *              name="application",
 *              required=true,
 *              example=1
 *          ),
 *
 *          @OA\Response(
 *              response="200",
 *              description="ok",
 *              @OA\JsonContent(
 *                  @OA\Property(property="success", type="string", example="true"),
 *                  @OA\Property(property="data", type="string", example="null"),
 *                  @OA\Property(property="message", type="bool", example="Заявка была успешно удалена"),

 *              ),
 *          ),
 * ),
 */
class ApplicationController
{

}


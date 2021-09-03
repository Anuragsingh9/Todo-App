<?php
///////////////////////////////// bulk setting update in one api\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\


/**
 * @param SettingUpdateRequest $request
 * @return JsonResponse
 */
//public function updateSettings(SettingUpdateRequest $request): JsonResponse {
//    try {
//        DB::connection('tenant')->beginTransaction();
//        $setting = $this->services->dataFactory->prepareGroupSettingUpdateData($request->setting);
//        if (isset($setting['group_logo'])){
//            $mainColors = $this->services->colorExtService->getMainColors($setting['group_logo']);
//        }
//        $data = $this->services->groupService->setGroupSettings($request->input('group_id'), $setting);
//        // converting the hex color code to rgba format
//        foreach ($setting as $key => $value) {
//            if (array_key_exists($key, config('kctadmin.default.group_settings.colors'))) {
//                $setting[$key] = $this->hexToRgba($value);
//            }
//        }
//        DB::connection('tenant')->commit();
//        return response()->json(['status' => true, 'data' => array_merge($setting,['main_colors' => $mainColors])], 201);
//    } catch (Exception $exception) {
//        DB::connection('tenant')->rollBack();
//        return $this->handleIse($exception);
//    }
//}


use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Modules\KctAdmin\Http\Requests\V1\SettingUpdateRequest;
//use Modules\KctAdmin\Rules\SettingValueRule;

//class SettingUpdateRequest extends FormRequest {
//    /**
//     * Get the validation rules that apply to the request.
//     *
//     * @return array
//     *
//     */
//    public function rules(): array {
//        return [
//            'setting'         => "required|array",
//            'setting.*'       => "required|array|max:2",
//            'setting.*.field' => ["required",new SettingValueRule($this->setting)],
//            'setting.*.value' => "required",
//            'group_id'        => "required|exists:tenant.groups,id",
//        ];
//    }
//
//
//    /**
//     * Determine if the user is authorized to make this request.
//     *
//     * @return bool
//     */
//    public function authorize(): bool {
//        return true;
//    }
//}


//class SettingValueRule implements Rule {
//
//    private array $setting;
//
//    private string $errorMessage;
//
//    /**
//     * SettingValueRule constructor.
//     * @param $setting
//     */
//    public function __construct($setting) {
//        if (!isset($setting)) {
//            return true;
//        }
//        $this->setting = $setting;
//    }
//
//    /**
//     * @param string $attribute
//     * @param mixed $value
//     * @return bool
//     * @throws ValidationException
//     */
//    public function passes($attribute, $value): bool {
//        $this->errorMessage = '';
//        $defaultColorsKey = config('kctadmin.default.group_settings.colors');
//        $defaultCheckboxesKey = config('kctadmin.default.group_settings.checkboxes');
//        $defaultTextboxesKey = config('kctadmin.default.group_settings.textboxes');
//        $defaultImagesKey = config('kctadmin.default.group_settings.images');
//        $validation = config('kctadmin.modelConstants.events.validations');
//        $count = count($this->setting);
//        for ($i = 0; $i < $count; $i++) {
//            // checking field is set or not
//            if (!$this->checkIsset($this->setting[$i])) {
//                if (array_key_exists($this->setting[$i]['field'], $defaultColorsKey)) {
//                    // Validating colors value
//                    $this->validateColor($this->setting[$i]['field'], $this->setting[$i]['value']);
//                } // Validating checkboxes value
//                elseif (array_key_exists($this->setting[$i]['field'], $defaultCheckboxesKey)) {
//                    $this->validateCheckBox($this->setting[$i]['field'], $this->setting[$i]['value']);
//                } // Validating textboxes value
//                elseif (array_key_exists($this->setting[$i]['field'], $defaultTextboxesKey)) {
//                    $this->validateTextbox($this->setting[$i]['field'], $this->setting[$i]['value'], $validation);
//                } // Validation image
//                elseif (array_key_exists($this->setting[$i]['field'],$defaultImagesKey)){
//                    $this->validateImage($this->setting[$i]['field'],$this->setting[$i]['value']);
//                }// Validating invalid key
//                else {
//                    $this->errorMessage = "{$this->setting[$i]['field']} is not a valid key";
//                    $this->getValidationMessage($this->setting[$i]['field'], $this->errorMessage);
//                }
//            }
//        }
//        if ($this->errorMessage === '') {
//            return true;
//        }
//        return false;
//    }
//
//    private function checkIsset($setting): bool {
//        if (!isset($setting['field']) || !isset($setting['value'])) {
//            return true;
//        }
//        return false;
//    }
//
//    /**
//     * @throws ValidationException
//     */
//    private function validateColor($field, $color) {
//        if (count($color) != 4) {
//            $this->errorMessage = "$field must have all rgba values";
//            $this->getValidationMessage($field, $this->errorMessage);
//        }
//        foreach ($color as $colorCode => $colorValue) {
//            if (!in_array($colorCode, ['r', 'g', 'b', 'a'])) {
//                $this->errorMessage = "Only rgba values are allowed, not[' . $colorCode . ']";
//                $this->getValidationMessage($field, $this->errorMessage);
//            } elseif ($colorCode != 'a') { // RGB Validations
//                if (!is_numeric($colorValue)) {
//                    $this->errorMessage = "Color $colorCode must have integer value";
//                    $this->getValidationMessage($field, $this->errorMessage);
//                } else if ($colorValue < 0 || $colorValue > 255) {
//                    $this->errorMessage = "Color $colorCode must be between 0 to 255";
//                    $this->getValidationMessage($field, $this->errorMessage);
//                }
//            } elseif ($colorCode == 'a') {// Alpha validations
//                if (!is_double($colorValue) && !is_float($colorValue) && !is_numeric($colorValue)) {
//                    $this->errorMessage = "Color $colorCode must be a valid number between 0-1";
//                    $this->getValidationMessage($field, $this->errorMessage);
//                } else if ($colorValue < 0 || $colorValue > 1) {
//                    $this->errorMessage = "Color $colorCode must be between 0-1";
//                    $this->getValidationMessage($field, $this->errorMessage);
//                }
//            }
//        }
//    }
//
//    /**
//     * @throws ValidationException
//     */
//    private function validateCheckBox($field, $value) {
//        if (!in_array($value, [0, 1])) {
//            $this->errorMessage = "$field must have 1 or 0";
//            $this->getValidationMessage($field, $this->errorMessage);
//        }
//    }
//
//    /**
//     * @throws ValidationException
//     */
//    private function validateTextbox($field, $value, $validation) {
//        if ($field == 'header_line_1') {
//            if (strlen($value) > $validation['header1_max']) {
//                $this->errorMessage = "$field should not greater then {$validation['header1_max']} ";
//                $this->getValidationMessage($field, $this->errorMessage);
//            }
//        } elseif ($field == 'header_line_2') {
//            if (strlen($value) > $validation['header2_max']) {
//                $this->errorMessage = "$field should not greater then {$validation['header2_max']} ";
//                $this->getValidationMessage($field, $this->errorMessage);
//            }
//        }
//    }
//
//    /**
//     * @throws ValidationException
//     */
//    private function validateImage($field, $value) {
//        if (!is_file($value)){
//            $this->errorMessage = 'Please select image to upload';
//            $this->getValidationMessage($field, $this->errorMessage);
//        }
//    }
//
//    /**
//     * @throws ValidationException
//     */
//    private function getValidationMessage($field, $message) {
//        $validator = Validator::make([], []);
//        $validator->errors()->add($field, $message);
//        throw new ValidationException($validator);
//    }
//
//    /**
//     * Get the validation error message.
//     *
//     * @return string
//     */
//    public function message(): string {
//        return $this->errorMessage;
//    }
//}

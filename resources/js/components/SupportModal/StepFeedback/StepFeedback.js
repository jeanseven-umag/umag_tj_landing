import { Flex, InputBase, Text, TextInput } from "@mantine/core";
import { IMaskInput } from "react-imask";

export const StepFeedback = ({ form, prevStep }) => {
  const handleNumber = (value) => {
    form.setFieldValue("phone", value);
    if (value?.length <= 4) {
      form.setFieldValue("phone", "");
    }
  };
  return (
    <div>
      <Text mb={20} className="support-modal-text">
        Чӣ тавр мо метавонем бо шумо тамос гирем?
      </Text>
      <TextInput
        mb="10px"
        styles={{
          input: {
            height: 30,
            fontSize: "12px",
            lineHeight: "14px",
            fontWeight: 400,
          },
          error: {
            fontSize: "12px",
            lineHeight: "14px",
            fontWeight: 400,
          },
        }}
        className="support-modal-text"
        placeholder="Ном"
        {...form.getInputProps("user_name")}
        onChange={(e) => {
          const value = e.target.value?.replace(/[^A-Za-zА-Яа-я]/g, "");
          form.setFieldValue("user_name", value);
        }}
      />
      <InputBase
        {...form.getInputProps("phone")}
        onChange={(e) => handleNumber(e.target.value)}
        component={IMaskInput}
        error={form.errors.phone}
        styles={{
          input: {
            height: 30,
            fontSize: "12px",
            lineHeight: "14px",
            fontWeight: 400,
          },
          error: {
            fontSize: "12px",
            lineHeight: "14px",
            fontWeight: 400,
          },
        }}
        className="support-modal-text"
        placeholder="Рақами мобилӣ"
        mask="+7 (000) 000-00-00"
        value={form.values.phone}
      />
      <Flex direction="row" gap={10}>
        <button className="support-modal-btn w-100" onClick={() => prevStep()}>
          Бозгашт
        </button>
        <button className="support-modal-btn w-100" type="submit">
          Фиристодан
        </button>
      </Flex>
    </div>
  );
};

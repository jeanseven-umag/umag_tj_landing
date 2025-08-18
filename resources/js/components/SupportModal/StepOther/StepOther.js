import { Flex, Text, Textarea } from "@mantine/core";

export const StepOther = ({ form, firstStep }) => {
  return (
    <div>
      <Text mb={20} className="support-modal-text">
        Другое (уточните)
      </Text>
      <Textarea
        styles={{
          input: {
            borderRadius: "8px",
            height: 120,
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
        placeholder="Уточните почему инструкция показалась вам некорректной"
        {...form.getInputProps("other_option_text")}
      />
      <Flex direction="row" gap={10}>
        <button className="support-modal-btn w-100" onClick={() => firstStep()}>
          Назад
        </button>
        <button className="support-modal-btn w-100" type="submit">
          Отправить
        </button>
      </Flex>
    </div>
  );
};

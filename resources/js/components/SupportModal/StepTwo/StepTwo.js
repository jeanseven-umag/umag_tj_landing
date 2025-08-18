import { Flex, Radio, Text } from "@mantine/core";

export const StepTwo = ({ form, prevStep, question }) => {
  return (
    <div>
      <Text mb={20} className="support-modal-text">
        {question?.title}
      </Text>
      <Radio.Group
        styles={{
          error: {
            fontSize: "12px",
            lineHeight: "14px",
            fontWeight: 400,
          },
        }}
        {...form.getInputProps("option_id")}
      >
        {question?.options?.map((option, index) => (
          <Radio
            key={index}
            styles={{
              radio: {
                width: 15,
                height: 15,
              },
              body: {
                marginBottom: 10,
              },
              inner: {
                alignSelf: "center",
                WebkitAlignSelf: "center",
              },
              label: {
                display: "flex",
                alignItems: "center",
                marginBottom: 0,
                color: "#828282",
                fontSize: "12px",
                lineHeight: "14px",
                fontWeight: 400,
              },
            }}
            onClick={() => {
              form.setFieldValue("other_option_text", "");
            }}
            value={option?.id?.toString()}
            label={option?.option_text}
          />
        ))}
        <Radio
          styles={{
            radio: {
              width: 15,
              height: 15,
            },
            body: {
              marginBottom: 10,
            },
            inner: {
              alignSelf: "center",
              WebkitAlignSelf: "center",
            },
            label: {
              display: "flex",
              alignItems: "center",
              marginBottom: 0,
              color: "#828282",
              fontSize: "12px",
              lineHeight: "14px",
              fontWeight: 400,
            },
          }}
          value="other"
          label="Другое (уточните)"
        />
      </Radio.Group>
      <Flex direction="row" gap={10}>
        <button className="support-modal-btn w-100" onClick={() => prevStep()}>
          Назад
        </button>
        <button className="support-modal-btn w-100" type="submit">
          Далее
        </button>
      </Flex>
    </div>
  );
};

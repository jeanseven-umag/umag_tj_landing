import { Flex, Radio } from "@mantine/core";

export const StepOne = ({ form, questions, setQuestion }) => {
  return (
    <div>
      <Radio.Group
        styles={{
          error: {
            fontFamily: 'Montserrat',
            fontSize: "12px",
            lineHeight: "14px",
            fontWeight: 400,
          },
        }}
        {...form.getInputProps("survey_id")}
      >
        {questions?.map((question, index) => (
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
              setQuestion(question);
            }}
            value={question?.id?.toString()}
            label={question?.title}
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
          label="Дигар (лутфан муайян кунед)"
        />
      </Radio.Group>
      <Flex direction="column">
        <button className="support-modal-btn" type="submit">
          Давом
        </button>
      </Flex>
    </div>
  );
};

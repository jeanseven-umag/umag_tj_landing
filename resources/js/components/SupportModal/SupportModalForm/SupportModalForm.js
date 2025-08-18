import { useForm } from "@mantine/form";
import { useEffect, useState } from "react";
import { StepOne } from "../StepOne/StepOne";
import { StepTwo } from "../StepTwo/StepTwo";
import { StepFeedback } from "../StepFeedback/StepFeedback";
import { StepOther } from "../StepOther/StepOther";
import axios from "axios";

export const SupportModalForm = ({ id, questions, active, setActive }) => {
  const [question, setQuestion] = useState();
  const form = useForm({
    initialValues: {
      survey_id: "",
      option_id: "",
      user_name: "",
      phone: "",
      other_option_text: "",
      knowledge_base_id: id?.toString(),
      link: window.location.href,
    },
    validate: (values) => {
      if (active === 1) {
        return {
          survey_id: !values.survey_id ? "Обязательное поле" : null,
        };
      } else if (active === 2) {
        return {
          option_id: !values.option_id ? "Обязательное поле" : null,
        };
      } else if (active === 3) {
        return {
          user_name: !values.user_name ? "Обязательное поле" : null,
          phone: !values.phone
            ? "Обязательное поле"
            : !/^\+\d{1} \(\d{3}\) \d{3}-\d{2}-\d{2}$/.test(values.phone)
            ? "Некорректный номер телефона"
            : null,
        };
      } else if (active === 0) {
        return {
          other_option_text: !values.other_option_text
            ? "Обязательное поле"
            : null,
        };
      }
      return {};
    },
  });

  const nextStep = () => {
    setActive((prevStep) => prevStep + 1);
  };
  const prevStep = () => {
    setActive((prevStep) => prevStep - 1);
  };
  const otherStep = () => {
    setActive(0);
  };
  const firstStep = () => {
    form.setFieldValue("option_id", "");
    form.setFieldValue("other_option_text", "");
    setActive(1);
  };
  const lastStep = () => {
    setActive(3);
  };

  const handleSubmit = async (values) => {
    try {
      if (active === 1 || active === 2) {
        if (values.survey_id === "other" || values.option_id === "other") {
          otherStep();
        } else {
          nextStep();
        }
      } else if (active === 3) {
        await axios.post("/surveys-front/submit", values).then(() => {
          nextStep();
        });
      } else if (active === 0) {
        lastStep();
      }
    } catch (e) {
      console.error(e);
    }
  };

  useEffect(() => {
    if (active === 4) form.reset();
  }, [active]);

  return (
    <form onSubmit={form.onSubmit(handleSubmit)}>
      {active === 1 && (
        <StepOne
          form={form}
          nextStep={nextStep}
          questions={questions}
          setQuestion={setQuestion}
        />
      )}
      {active === 2 && (
        <StepTwo form={form} prevStep={prevStep} question={question} />
      )}
      {active === 3 && <StepFeedback form={form} prevStep={prevStep} />}
      {active === 0 && <StepOther form={form} firstStep={firstStep} />}
    </form>
  );
};

import { ActionIcon, Divider, Flex, Text } from "@mantine/core";
import { IconX } from "@tabler/icons-react";
import { ContactInfo } from "./ContactInfo/ContactInfo";
import { useEffect, useState } from "react";
import axios from "axios";
import { SupportModalText } from "./SupportModalText/SupportModalText";
import { SupportModalForm } from "./SupportModalForm/SupportModalForm";

export const SupportModal = ({ id, closeModal, title = "Помощь" }) => {
  const [active, setActive] = useState(1);
  const [questions, setQuestions] = useState([]);

  const getData = async () => {
    await axios.get("/surveys-front").then((resp) => {
      setQuestions(resp?.data?.data);
    });
  };

  useEffect(() => {
    getData();
  }, []);
  return (
    <>
      {questions?.length > 0 && (
        <div className="support-modal-block" title={title}>
          <Flex direction="column">
            <Flex justify="space-between" mb={20}>
              <Text className="support-modal-caption">{title}</Text>
              <ActionIcon
                className="support-modal-close-btn"
                onClick={() => closeModal()}
              >
                <IconX size={14} />
              </ActionIcon>
            </Flex>
            <SupportModalText active={active} />
            <Divider my={20} />
            <SupportModalForm
              id={id}
              active={active}
              setActive={setActive}
              questions={questions}
            />
          </Flex>
          <ContactInfo />
        </div>
      )}
    </>
  );
};

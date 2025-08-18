import { Divider, Flex, Grid, Modal, Text, TextInput } from "@mantine/core";
import { IconSearch } from "@tabler/icons-react";
import { TarifCompareTable } from "./TarifCompareTable/TarifCompareTable";

export const TarifCompareModal = ({ show, close, handleTariff }) => {

  return (
    <Modal
      opened={show}
      onClose={close}
      closeOnClickOutside
      closeButtonProps={{ size: 50 }}
      size="80%"
      title="Сравнение тарифов и функций"
      withCloseButton
      styles={{
        title: {
          marginLeft: "50%",
          transform: "translateX(-50%)",
          padding: 20,
          fontSize: "30px",
          fontWeight: 700,
          lineHeight: "37px",
          textAlign: "center",
        },
        overlay: {
          zIndex: 10000,
        },
        inner: {
          zIndex: 10001,
        },
      }}
    >
      <Divider mb={20} />
      <Grid gutter={20}>
        <Grid.Col span={3}>
          <Flex direction="column" justify="flex-end" h="100%">
            <TextInput
              size="xl"
              placeholder="Поиск функций"
              rightSection={<IconSearch size="15px" color="gray" />}
            />
          </Flex>
        </Grid.Col>
        <Grid.Col span={3}>
          <Flex direction="column" justify="space-between">
            <p className="tariffs-compareModal-card-caption">Start</p>
            <Flex align="center">
              <p className="tariffs-compareModal-card-text">₸6,900 /</p>
              <p className="tariffs-compareModal-card-subText">в месяц</p>
            </Flex>
            <button className="tariffs-compareModal-card-btn" onClick={handleTariff}>
              Выбрать тариф
            </button>
          </Flex>
        </Grid.Col>
        <Grid.Col span={3}>
          <Flex direction="column" justify="space-between">
            <p className="tariffs-compareModal-card-caption">Standart</p>
            <Flex align="center">
              <p className="tariffs-compareModal-card-text">₸19,900 /</p>
              <p className="tariffs-compareModal-card-subText">в месяц</p>
            </Flex>
            <button className="tariffs-compareModal-card-btn" onClick={handleTariff}>
              Выбрать тариф
            </button>
          </Flex>
        </Grid.Col>
        <Grid.Col span={3}>
          <Flex direction="column" justify="space-between">
            <p className="tariffs-compareModal-card-caption">Pro</p>
            <Flex align="center">
              <p className="tariffs-compareModal-card-text">₸29,900 /</p>
              <p className="tariffs-compareModal-card-subText">в месяц</p>
            </Flex>
            <button className="tariffs-compareModal-card-btn" onClick={handleTariff}>
              Выбрать тариф
            </button>
          </Flex>
        </Grid.Col>
      </Grid>
      <TarifCompareTable />
    </Modal>
  );
};
